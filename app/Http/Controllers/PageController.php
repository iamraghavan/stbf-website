<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; // Add this import for logging

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function buildingConstruction(Request $request)
    {
        try {
            // Path to the JSON file in public directory
            $filePath = public_path('services.json');

            // Check if file exists
            if (!file_exists($filePath)) {
                Log::error("services.json not found at: $filePath");
                abort(500, 'services.json file not found');
            }

            // Load services from JSON
            $jsonContent = file_get_contents($filePath);

            // Check if content is empty
            if (empty($jsonContent)) {
                Log::error("services.json is empty.");
                abort(500, 'services.json is empty.');
            }

            // Log raw JSON content
            Log::info('services.json content: ' . $jsonContent);

            // Decode JSON
            $services = json_decode($jsonContent, true);

            // Validate JSON structure
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid JSON in services.json: ' . json_last_error_msg());
                abort(500, 'Invalid JSON in services.json');
            }

            // Find the service by slug
            $service = collect($services)->firstWhere('slug', 'all-types-of-building-construction');

            if (!$service) {
                Log::error('Service not found for slug: all-types-of-building-construction');
                abort(404, 'Service not found');
            }

            // Get active tab from query or default
            $activeTab = $request->query('tab', 'whats-included');

            // Return the view with data
            return view('pages.services.all-types-of-building-construction', compact('service', 'activeTab'));
        } catch (\Exception $e) {
            Log::error('Error in buildingConstruction: ' . $e->getMessage());
            abort(500, 'An unexpected error occurred');
        }
    }
}