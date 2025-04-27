<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');


Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/building-construction', [PageController::class, 'buildingConstruction'])->name('services.building-construction');
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