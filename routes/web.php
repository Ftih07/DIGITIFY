<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Faq;

Route::get('/', function () {
    // Ambil data dan urutkan sesuai sort_order
    $packages = Package::orderBy('sort_order', 'asc')->get();

    // Ambil portfolio (bisa diurutkan dari yang terbaru)
    $portfolios = Portfolio::orderBy('sort_order', 'asc')->get();
    
    // Ambil FAQ yang status is_active nya true saja
    $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

    // Lempar data ke resources/views/index.blade.php
    return view('index', compact('packages', 'portfolios', 'faqs'));
});
