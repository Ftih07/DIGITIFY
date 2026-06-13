<?php

use App\Http\Controllers\AIController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\MarsVisionController;
use App\Models\Faq;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\ToThePointPackage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Ambil data dan urutkan sesuai sort_order
    $packages = Package::orderBy('sort_order', 'asc')->get();

    // Ambil portfolio (bisa diurutkan dari yang terbaru)
    $portfolios = Portfolio::orderBy('sort_order', 'asc')->get();

    // Ambil FAQ yang status is_active nya true saja
    $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

    // Ambil data paket To-The-Point yang aktif dan urutkan berdasarkan sort_order
    $toThePointPackages = ToThePointPackage::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    // Lempar data ke resources/views/index.blade.php
    return view('index', compact('packages', 'portfolios', 'faqs', 'toThePointPackages'));
});

// ROUTE UNTUK AI SHOWROOM
Route::get('/ai-showroom', [AIController::class, 'index']);
Route::post('/ai-showroom/predict', [AIController::class, 'predict']);

// ROUTE UNTUK MARS VISION
Route::get('/mars-vision', [MarsVisionController::class, 'index'])->name('mars-vision.index');
Route::post('/mars-vision/predict', [MarsVisionController::class, 'predict'])->name('mars-vision.predict');

// ROUTE UNTUK INSTAGRAM DOWNLOADER
Route::get('/ig-downloader', [InstagramController::class, 'index'])->name('ig.index');
Route::post('/ig-downloader/process', [InstagramController::class, 'process'])->name('ig.process');
