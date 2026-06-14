<?php

use App\Http\Controllers\AIController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\MarsVisionController;
use App\Models\Faq;
use App\Models\Game;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\ToThePointPackage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $packages = Package::orderBy('sort_order', 'asc')->get();

    $portfolios = Portfolio::where('type', 'web_dev')->orderBy('sort_order', 'asc')->get();
    $faqs = Faq::where('type', 'web_dev')->where('is_active', true)->orderBy('sort_order', 'asc')->get();

    $toThePointPackages = ToThePointPackage::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    return view('index', compact('packages', 'portfolios', 'faqs', 'toThePointPackages'));
})->name('home');

// ROUTE UNTUK GAME SERVICES (JOKI)
Route::get('/game-services', function () {
    $games = Game::with([
        'packages',
        'categories' => function ($query) {
            $query->orderBy('sort_order', 'asc');
        },
        'categories.services' => function ($query) {
            $query->where('is_active', true);
        },
    ])
        ->where('is_active', true)
        ->get();

    $portfolios = Portfolio::where('type', 'game_joki')->orderBy('sort_order', 'asc')->get();
    $faqs = Faq::where('type', 'game_joki')->where('is_active', true)->orderBy('sort_order', 'asc')->get();

    return view('game-services', compact('games', 'portfolios', 'faqs'));
})->name('game-services.index');

// ROUTE UNTUK AI SHOWROOM
Route::get('/ai-showroom', [AIController::class, 'index']);
Route::post('/ai-showroom/predict', [AIController::class, 'predict']);

// ROUTE UNTUK MARS VISION
Route::get('/mars-vision', [MarsVisionController::class, 'index'])->name('mars-vision.index');
Route::post('/mars-vision/predict', [MarsVisionController::class, 'predict'])->name('mars-vision.predict');

// ROUTE UNTUK INSTAGRAM DOWNLOADER
Route::get('/ig-downloader', [InstagramController::class, 'index'])->name('ig.index');
Route::post('/ig-downloader/process', [InstagramController::class, 'process'])->name('ig.process');
