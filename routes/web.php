<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

require __DIR__ . '/auth.php';

// Public Routes
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about/sri-thiruthani-builders-and-foundation', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/all-types-of-building-construction', [PageController::class, 'buildingConstruction'])->name('services.all-types-of-building-construction');
Route::get('/services/interiors', [PageController::class, 'interiors'])->name('services.interiors');
Route::get('/services/renovation', [PageController::class, 'renovation'])->name('services.renovation');
Route::get('/services/architectural-planning', [PageController::class, 'architecturalPlanning'])->name('services.architectural-planning');
Route::get('/services/bank-loan-estimation', [PageController::class, 'bankLoanEstimation'])->name('services.bank-loan-estimation');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/ongoing', [PageController::class, 'ongoingProjects'])->name('projects.ongoing');
Route::get('/projects/completed', [PageController::class, 'completedProjects'])->name('projects.completed');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/s/submit/contact-form', [PageController::class, 'submit'])->name('submit.contact-form');
Route::get('/test-mail', [PageController::class, 'testMail']);

// Database Connection Test Route
Route::get('/dev/p/v', function (\Illuminate\Http\Request $request) {
    $env = $request->query('env', 'development');
    try {
        DB::connection()->getPdo();
        $dbName = DB::connection()->getDatabaseName();
        return response()->json([
            'status' => 'Connected successfully',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => '❌ Connection failed',
            'environment' => $env,
            'error' => $e->getMessage(),
        ], 500);
    }
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Project Management Routes
    Route::get('/projects/admin', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/admin/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/admin', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/admin/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/admin/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/admin/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});