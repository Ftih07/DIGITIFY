@extends('layouts.app')

@section('title', '503 Sedang Maintenance | Digitify')

@section('content')
<section class="relative bg-white py-32 min-h-[75vh] flex items-center justify-center overflow-hidden">
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-gray-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse"></div>
    <div class="absolute bottom-1/4 right-10 w-72 h-72 bg-[#FF8323] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
        <div class="mb-8 text-[#FF8323] flex justify-center animate-bounce">
            <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
        </div>
        <h1 class="text-8xl md:text-9xl font-extrabold text-[#0A192F] tracking-tight mb-2 hidden">503</h1>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Situs Sedang Dalam Perawatan</h2>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            Kami sedang melakukan pembaruan rutin untuk meningkatkan pengalaman kamu di Digitify. Silakan kembali beberapa menit lagi!
        </p>
    </div>
</section>
@endsection