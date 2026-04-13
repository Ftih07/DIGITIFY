<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Faq;

Route::get('/', function () {
    $packages = Package::orderBy('sort_order', 'asc')->get();

    // Ganti get() jadi paginate(6)
    $portfolios = Portfolio::orderBy('sort_order', 'asc')->paginate(6);

    $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

    return view('index', compact('packages', 'portfolios', 'faqs'));
});
