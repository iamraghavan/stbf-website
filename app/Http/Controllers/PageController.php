<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;
use Artesaos\SEOTools\Contracts\SEOTools as SEOToolsContract;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    protected $seo;

    public function __construct(SEOToolsContract $seo)
    {
        $this->seo = $seo;
    }

    public function index(): View
    {
        $this->seo->setTitle('Home');
        $this->seo->setDescription('Welcome to Sri Thiruthani Builders & Foundation — delivering trusted building construction, renovation, and architectural services.');
        $this->seo->opengraph()->setUrl(url()->current());
        $this->seo->setCanonical(url()->current());
        $this->seo->opengraph()->addProperty('type', 'website');
        $this->seo->twitter()->setSite('@raghavanjeeva');
        $this->seo->jsonLd()->addImage(asset('assets/r_files/stbf_website.webp'));

        return view('pages.index');
    }

    public function about(): View
    {
        $this->seo->setTitle('About Us');
        $this->seo->setDescription('Learn about Sri Thiruthani Builders & Foundation — your reliable partner for residential and commercial construction services in India.');
        $this->seo->opengraph()->setUrl(url()->current());
        $this->seo->setCanonical(url()->current());
        $this->seo->jsonLd()->addImage(asset('assets/r_files/stbf_website.webp'));

        return view('pages.about');
    }

    public function contact(): View
    {
        $this->seo->setTitle('Contact Us');
        $this->seo->setDescription('Get in touch with Sri Thiruthani Builders & Foundation — your trusted partner for residential and commercial construction services in India.');
        $this->seo->opengraph()->setUrl(url()->current());
        $this->seo->setCanonical(url()->current());
        $this->seo->jsonLd()->addImage(asset('assets/r_files/stbf_website.webp'));

        return view('pages.contact');
    }

    public function buildingConstruction(Request $request): View
    {
        return $this->loadServicePage('all-types-of-building-construction', $request);
    }

    public function interiors(Request $request): View
    {
        return $this->loadServicePage('interiors', $request);
    }

    public function renovation(Request $request): View
    {
        return $this->loadServicePage('renovation', $request);
    }

    public function architecturalPlanning(Request $request): View
    {
        return $this->loadServicePage('architectural-planning', $request);
    }

    public function bankLoanEstimation(Request $request): View
    {
        return $this->loadServicePage('bank-loan-estimation', $request);
    }

    private function loadServicePage(string $slug, Request $request): View
    {
        try {
            $service = $this->getServiceBySlug($slug);

            if (!$service) {
                Log::warning("Service not found for slug: {$slug}");
                abort(Response::HTTP_NOT_FOUND, 'Requested service not found.');
            }

            // Setup SEO dynamically per service
            $this->seo->setTitle("{$service['title']}");
            $this->seo->setDescription($service['meta_description'] ?? 'Explore premium construction and renovation services.');
            $this->seo->metatags()->addMeta('keywords', implode(',', $service['meta_keywords'] ?? ['construction', 'interiors', 'architectural planning']));
            $this->seo->opengraph()->setUrl(url()->current());
            $this->seo->setCanonical(url()->current());
            $this->seo->opengraph()->addProperty('type', 'article');
            $this->seo->jsonLd()->addImage(asset('assets/r_files/stbf_website.webp'));

            $activeTab = $request->query('tab', 'whats-included');

            return view("pages.services.{$slug}", compact('service', 'activeTab'));
        } catch (\Exception $e) {
            Log::error("Error loading service '{$slug}': " . $e->getMessage(), ['exception' => $e]);
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong while fetching the service.');
        }
    }

    private function getServiceBySlug(string $slug): ?array
    {
        $services = $this->loadServices();

        return collect($services)->firstWhere('slug', $slug);
    }

    private function loadServices(): array
    {
        $filePath = public_path('services.json');

        if (!File::exists($filePath)) {
            Log::error("services.json file not found at: {$filePath}");
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Required data file not found.');
        }

        $jsonContent = File::get($filePath);

        if (empty($jsonContent)) {
            Log::error("services.json file is empty.");
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Required data file is empty.');
        }

        $services = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error("Invalid JSON format in services.json: " . json_last_error_msg());
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Invalid data format detected.');
        }

        return $services;
    }


    // contact form submission

    public function submit(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'nullable|email|max:255',
            'address' => 'required|string|max:255',
            'message' => 'required|string|max:250',
        ]);

        // Sanitize message (additional server-side sanitization)
        $validated['message'] = strip_tags($validated['message']);

        // Prepare submission data
        $submission = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? '',
            'address' => $validated['address'],
            'message' => $validated['message'],
            'timestamp' => now()->toIso8601String(),
            'date' => now()->toDateString(),
        ];

        // Store in JSON file
        $filePath = public_path('contact-submissions.json');
        $submissions = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];
        $submissions[] = $submission;
        file_put_contents($filePath, json_encode($submissions, JSON_PRETTY_PRINT));

        // Send email to owner
        Mail::raw(
            "New submission:\nName: {$submission['name']}\nPhone: {$submission['phone']}\nEmail: {$submission['email']}\nAddress: {$submission['address']}\nMessage: {$submission['message']}\nTimestamp: {$submission['timestamp']}",
            function ($message) {
                $message->to('raghavanofficials@gmail.com') // Replace with owner's email
                    ->subject('New Contact Form Submission');
            }
        );

        // Send email to user if email is provided
        if ($submission['email']) {
            Mail::raw(
                "Dear {$submission['name']},\nThank you for contacting us! We have received your message:\nPhone: {$submission['phone']}\nAddress: {$submission['address']}\nMessage: {$submission['message']}\nWe will get back to you soon.\nBest regards,\nSri Thiruthani Foundation",
                function ($message) use ($submission) {
                    $message->to($submission['email'])
                        ->subject('Thank You for Your Submission');
                }
            );
        }

        return response()->json(['message' => 'Form submitted successfully']);
    }
}