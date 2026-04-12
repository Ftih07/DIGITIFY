@extends('layouts.app')

@section('title', '500 Kesalahan Server | Digitify')

@section('content')
<section class="relative bg-white py-32 min-h-[75vh] flex items-center justify-center overflow-hidden">
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-[#0A192F] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse"></div>
    <div class="absolute bottom-1/4 right-10 w-72 h-72 bg-[#FF8323] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
        <h1 class="text-8xl md:text-9xl font-extrabold text-[#0A192F] tracking-tight mb-2 drop-shadow-sm">
            500
        </h1>
        <div class="w-20 h-1.5 bg-[#FF8323] mx-auto rounded-full mb-8"></div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kesalahan Internal Server</h2>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            Ups! Terjadi kesalahan pada sistem kami. Tim developer (Naufal) sedang berusaha memperbaikinya secepat mungkin. Silakan coba lagi nanti.
        </p>
        <div class="flex items-center justify-center gap-4">
            <button onclick="window.location.reload()" class="inline-flex items-center gap-2 bg-[#0A192F] text-white px-8 py-3.5 rounded-full font-bold hover:bg-slate-800 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Muat Ulang
            </button>
            <a href="{{ url('/') }}" class="text-[#FF8323] font-bold hover:underline">Ke Beranda</a>
        </div>
    </div>
</section>
@endsection