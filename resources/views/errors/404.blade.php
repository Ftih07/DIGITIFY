@extends('layouts.app')

@section('title', '404 Halaman Tidak Ditemukan | Digitify')

@section('content')
<section class="relative bg-white py-32 min-h-[75vh] flex items-center justify-center overflow-hidden">
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-[#FF8323] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse"></div>
    <div class="absolute bottom-1/4 right-10 w-72 h-72 bg-[#0A192F] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
        <h1 class="text-8xl md:text-9xl font-extrabold text-[#0A192F] tracking-tight mb-2 drop-shadow-sm">
            404
        </h1>
        <div class="w-20 h-1.5 bg-[#FF8323] mx-auto rounded-full mb-8"></div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Waduh, Nyasar Ya?</h2>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            Halaman yang kamu cari sepertinya sudah dihapus, dipindahkan, atau memang tidak pernah ada. Yuk, balik ke jalan yang benar!
        </p>
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 bg-[#FF8323] text-white px-8 py-3.5 rounded-full font-bold shadow-lg hover:bg-[#e6731f] hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Beranda
        </a>
    </div>
</section>
@endsection