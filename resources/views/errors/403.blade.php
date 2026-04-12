@extends('layouts.app')

@section('title', '403 Akses Ditolak | Digitify')

@section('content')
<section class="relative bg-white py-32 min-h-[75vh] flex items-center justify-center overflow-hidden">
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-red-500 rounded-full mix-blend-multiply filter blur-[100px] opacity-10 animate-pulse"></div>
    <div class="absolute bottom-1/4 right-10 w-72 h-72 bg-[#0A192F] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
        <h1 class="text-8xl md:text-9xl font-extrabold text-[#0A192F] tracking-tight mb-2 drop-shadow-sm">
            403
        </h1>
        <div class="w-20 h-1.5 bg-[#FF8323] mx-auto rounded-full mb-8"></div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Akses Ditolak</h2>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            Maaf, kamu tidak memiliki izin (otorisasi) untuk mengakses halaman ini. Area ini khusus untuk pengguna tertentu.
        </p>
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 border-2 border-[#0A192F] text-[#0A192F] px-8 py-3.5 rounded-full font-bold hover:bg-[#0A192F] hover:text-white hover:-translate-y-1 transition-all duration-300">
            Kembali ke Beranda
        </a>
    </div>
</section>
@endsection