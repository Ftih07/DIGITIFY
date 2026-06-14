<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Jasa Joki Game Profesional & Terpercaya | Digitify')</title>
    <meta name="title" content="Jasa Joki Game Profesional & Terpercaya - Digitify" />

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='19' stroke='%23FF8323' stroke-width='2' /%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' dy='.3em' font-family='Arial' font-weight='bold' font-size='24' fill='%23FF8323'%3ED%3C/text%3E%3C/svg%3E">

    {{-- SEO Deskripsi & Keywords --}}
    <meta name="description"
        content="Layanan joki game profesional, aman, dan terpercaya. Spesialis Genshin Impact & Wuthering Waves. Jasa rawat akun, farming, eksplorasi map 100%, dan quest cepat!" />
    <meta name="keywords"
        content="jasa joki game, joki genshin impact, joki wuthering waves, joki wuwa, joki game murah, rawat akun game, joki aman terpercaya, joki eksplorasi 100%, joki farming, digitify" />
    <meta name="author" content="Naufal Fathi - Digitify" />
    <meta name="robots" content="index, follow" />

    {{-- Open Graph / Facebook / WA Preview --}}
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Jasa Joki Game Profesional & Terpercaya - Digitify" />
    <meta property="og:description"
        content="Layanan joki game aman dan cepat. Spesialis Genshin & WuWa. Farming, eksplorasi, dan rawat akun terima beres!" />
    <meta property="og:image" content="{{ asset('logo.png') }}" />

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Jasa Joki Game Profesional & Terpercaya - Digitify" />
    <meta property="twitter:description"
        content="Layanan joki game aman dan cepat. Spesialis Genshin & WuWa. Farming, eksplorasi, dan rawat akun terima beres!" />
    <meta property="twitter:image" content="{{ asset('logo.png') }}" />

    <meta name="theme-color" content="#0A192F" />

    {{-- Schema.org untuk Rich Snippet Google --}}
    @verbatim
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Digitify Game Services",
            "image": "https://www.digitify.my.id/logo.png",
            "@id": "https://www.digitify.my.id/game-services",
            "url": "https://www.digitify.my.id/game-services",
            "telephone": "+6281226110988",
            "priceRange": "Rp",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Purwokerto",
                "addressRegion": "Jawa Tengah",
                "addressCountry": "ID"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": -7.4243,
                "longitude": 109.2302
            },
            "areaServed": "ID",
            "founder": {
                "@type": "Person",
                "name": "Naufal Fathi"
            },
            "description": "Layanan joki game profesional, aman, dan terpercaya. Spesialis jasa rawat akun, farming, dan eksplorasi untuk Genshin Impact dan Wuthering Waves."
        }
    </script>
    @endverbatim

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* =========================================================
           DESIGN TOKENS
           ========================================================= */
        :root {
            --navy: #0A192F;
            --orange: #FF8323;
            --orange-dark: #e6731f;
            --orange-glow: rgba(255, 131, 35, 0.1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: ui-sans-serif, system-ui, sans-serif;
        }

        /* ---- Animasi masuk ---- */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .anim-fadeup {
            animation: fadeUp .55s ease forwards;
        }

        .anim-delay-1 {
            animation-delay: .10s;
            opacity: 0;
        }

        .anim-delay-2 {
            animation-delay: .22s;
            opacity: 0;
        }

        .anim-delay-3 {
            animation-delay: .34s;
            opacity: 0;
        }

        /* ---- Floating blobs di hero ---- */
        @keyframes floatBlob {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-16px) scale(1.04);
            }
        }

        .hero-blob {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: floatBlob 6s ease-in-out infinite;
        }

        .hero-blob-1 {
            width: 200px;
            height: 200px;
            background: rgba(255, 131, 35, .06);
            top: -40px;
            left: 4%;
            animation-delay: 0s;
        }

        .hero-blob-2 {
            width: 130px;
            height: 130px;
            background: rgba(10, 25, 47, .05);
            top: 30px;
            right: 6%;
            animation-delay: 2s;
        }

        .hero-blob-3 {
            width: 90px;
            height: 90px;
            background: rgba(255, 131, 35, .08);
            bottom: 0;
            left: 22%;
            animation-delay: 1s;
        }

        /* ---- Dot ping badge ---- */
        @keyframes ping {
            0% {
                transform: scale(1);
                opacity: .6;
            }

            100% {
                transform: scale(2.2);
                opacity: 0;
            }
        }

        .dot-ping {
            position: relative;
            display: inline-flex;
            width: 8px;
            height: 8px;
        }

        .dot-ping::before {
            content: '';
            position: absolute;
            inset: 0;
            background: #fb923c;
            border-radius: 50%;
            animation: ping 1.2s ease-out infinite;
            opacity: .6;
        }

        .dot-ping::after {
            content: '';
            position: absolute;
            inset: 1px;
            background: #f97316;
            border-radius: 50%;
        }

        /* ---- Tab bar ---- */
        .game-tab {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 18px;
            border-radius: 100px;
            border: 1.5px solid #E2E8F0;
            background: #FFFFFF;
            color: #64748B;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
            flex-shrink: 0;
            transition: all .2s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .03);
        }

        .game-tab:hover {
            border-color: var(--orange);
            color: var(--orange-dark);
            background: var(--orange-glow);
        }

        .game-tab.active {
            background: var(--orange) !important;
            border-color: var(--orange) !important;
            color: #fff !important;
            box-shadow: 0 4px 16px rgba(255, 131, 35, .35);
        }

        /* ---- Tab bar sticky ---- */
        .tab-bar-sticky {
            position: sticky;
            top: 65px;
            z-index: 30;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, .9);
            border-bottom: 1px solid #E2E8F0;
        }

        .tab-scroll::-webkit-scrollbar {
            height: 0;
        }

        /* ---- Package cards ---- */
        .pkg-card {
            background: #FFFFFF;
            border: 1.5px solid #E2E8F0;
            border-radius: 22px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .04);
            transition: border-color .2s, transform .2s, box-shadow .2s;
            position: relative;
            overflow: hidden;
        }

        /* top accent bar */
        .pkg-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #E2E8F0;
            transition: background .25s;
        }

        .pkg-card:hover {
            border-color: rgba(255, 131, 35, .45);
            transform: translateY(-5px);
            box-shadow: 0 16px 40px rgba(255, 131, 35, .12);
        }

        .pkg-card:hover::before {
            background: linear-gradient(90deg, var(--orange), #fbbf24);
        }

        .pkg-card--highlight {
            background: linear-gradient(145deg, #fff8f3, #ffffff);
            border-color: rgba(255, 131, 35, .35) !important;
        }

        .pkg-card--highlight::before {
            background: linear-gradient(90deg, var(--orange), #fbbf24) !important;
        }

        /* decorative circle inside highlight card */
        .pkg-card--highlight::after {
            content: '';
            position: absolute;
            top: -32px;
            right: -32px;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: rgba(255, 131, 35, .07);
            pointer-events: none;
        }

        /* ---- Service row ---- */
        .svc-row {
            transition: background .15s;
        }

        .svc-row:hover {
            background: #fafbff;
        }

        .svc-row:hover .svc-name {
            color: var(--orange);
        }

        .svc-row:hover .svc-price {
            color: var(--orange);
        }

        .svc-row:hover .svc-arrow {
            background: var(--orange);
            color: #fff;
        }

        /* ---- Section tab content ---- */
        .game-section {
            display: none;
        }

        .game-section.active {
            display: block;
            animation: fadeUp .4s ease forwards;
        }

        /* ---- Nav link underline ---- */
        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--orange);
            transition: width .2s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ---- Section title divider (gradient fade) ---- */
        .divider-line-left {
            flex: 1;
            height: 1.5px;
            background: linear-gradient(to right, transparent, #E2E8F0);
        }

        .divider-line-right {
            flex: 1;
            height: 1.5px;
            background: linear-gradient(to left, transparent, #E2E8F0);
        }
    </style>
</head>

<body class="bg-slate-50 font-sans antialiased selection:bg-[#FF8323] selection:text-white text-gray-800">

    {{-- ===================== NAVBAR ===================== --}}
    <header class="bg-white sticky top-0 z-50 shadow-sm relative">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between bg-white relative z-50">
            {{-- Logo --}}
            <div class="flex items-center gap-2">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="19" stroke="#FF8323" stroke-width="2" />
                    <text x="50%" y="55%" text-anchor="middle" dy=".3em" font-family="Arial" font-weight="bold"
                        font-size="24" fill="#FF8323">D</text>
                </svg>
                <span class="text-2xl font-bold text-[#0A192F]">Digitify</span>
            </div>

            {{-- Desktop Menu (Disederhanakan) --}}
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}"
                    class="nav-link text-gray-600 hover:text-[#FF8323] transition flex items-center gap-1.5 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Web Dev
                </a>

                <span class="w-px h-5 bg-gray-300"></span>

                <a href="{{ route('game-services.index') }}"
                    class="nav-link text-[#0A192F] font-bold hover:text-[#FF8323] transition flex items-center gap-1.5 group">
                    <svg class="w-4 h-4 text-[#FF8323] group-hover:animate-pulse" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Joki Game
                </a>
            </div>

            {{-- Right Section --}}
            <div class="flex items-center gap-4">
                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Aku mau tanya-tanya dulu soal layanan joki game-nya nih. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="hidden md:block bg-[#FF8323] text-white px-6 py-2.5 rounded-full font-semibold hover:bg-[#e6731f] transition duration-200 shadow-md transform hover:-translate-y-0.5">
                    KONSULTASI SEKARANG
                </a>

                <button id="mobile-menu-btn"
                    class="md:hidden text-gray-800 hover:text-[#FF8323] focus:outline-none relative w-8 h-8 flex items-center justify-center">
                    <svg id="icon-menu"
                        class="w-7 h-7 absolute transition-all duration-300 transform scale-100 opacity-100"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="icon-close"
                        class="w-7 h-7 absolute transition-all duration-300 transform scale-50 opacity-0 rotate-[-90deg]"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </nav>

        {{-- Mobile Menu Panel --}}
        <div id="mobile-menu"
            class="absolute w-full left-0 top-full bg-white shadow-xl border-t border-gray-100 transform -translate-y-4 opacity-0 pointer-events-none transition-all duration-300 ease-in-out z-40">
            <div class="flex flex-col px-6 pb-6 pt-4 gap-4">
                <a href="{{ route('home') }}"
                    class="mobile-link text-gray-600 font-medium hover:text-[#FF8323] flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Web Dev
                </a>

                <div class="w-full h-px bg-gray-100 my-1"></div>

                <a href="{{ route('game-services.index') }}"
                    class="mobile-link text-[#0A192F] bg-slate-50 border border-slate-100 p-3 rounded-lg font-bold hover:text-[#FF8323] flex items-center gap-2 mt-2">
                    <svg class="w-4 h-4 text-[#FF8323] group-hover:animate-pulse" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Layanan Joki Game
                </a>

                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Aku mau tanya-tanya dulu soal layanan joki game-nya nih. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="bg-[#FF8323] text-white text-center py-3 rounded-xl font-bold mt-2 shadow-md">
                    KONSULTASI & ORDER SEKARANG
                </a>
            </div>
        </div>
    </header>

    {{-- ===================== HERO ===================== --}}
    <section class="bg-white pt-20 pb-16 relative overflow-hidden border-b border-gray-200">

        {{-- Dot grid background --}}
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
            style="background-image: radial-gradient(circle, rgba(255,131,35,0.12) 1px, transparent 1px); background-size: 28px 28px;
                   mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 80%);
                   -webkit-mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 80%);">
        </div>

        {{-- Radial glow --}}
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
            style="background: radial-gradient(ellipse 70% 40% at 50% 0%, rgba(255,131,35,0.08) 0%, transparent 70%);">
        </div>

        {{-- Floating blobs --}}
        <div class="hero-blob hero-blob-1" aria-hidden="true"></div>
        <div class="hero-blob hero-blob-2" aria-hidden="true"></div>
        <div class="hero-blob hero-blob-3" aria-hidden="true"></div>

        <div class="relative max-w-3xl mx-auto px-6 text-center">

            {{-- Badge --}}
            <span
                class="anim-fadeup anim-delay-1 inline-flex items-center gap-2 px-4 py-1.5 bg-orange-50 text-orange-600 font-bold rounded-full text-xs mb-5 border border-orange-100 tracking-widest uppercase">
                <span class="dot-ping"></span>
                Layanan Gaming — Aktif &amp; Terpercaya
            </span>

            <h1 class="anim-fadeup anim-delay-2 text-4xl md:text-5xl font-extrabold text-[#0A192F] leading-tight mb-5">
                Joki Game <span class="text-[#FF8323]">Profesional</span>
            </h1>

            <p
                class="anim-fadeup anim-delay-3 text-gray-500 text-base md:text-lg max-w-xl mx-auto mb-8 leading-relaxed">
                Rank naik, misi selesai, item langka terkumpul. Pilih game favoritmu dan temukan paket yang pas.
            </p>

            {{-- Stats --}}
            <div class="anim-fadeup anim-delay-3 flex flex-wrap justify-center gap-0 text-center mb-10">
                <div class="px-6 py-2">
                    <p class="text-2xl font-extrabold text-[#0A192F]">{{ $games->count() }}+</p>
                    <p class="text-xs text-gray-500 mt-0.5 font-semibold">Game Tersedia</p>
                </div>
                <div class="w-px bg-gray-200 self-stretch my-1"></div>
                <div class="px-6 py-2">
                    <p class="text-2xl font-extrabold text-[#FF8323]">24/7</p>
                    <p class="text-xs text-gray-500 mt-0.5 font-semibold">Siap Order</p>
                </div>
                <div class="w-px bg-gray-200 self-stretch my-1"></div>
                <div class="px-6 py-2">
                    <p class="text-2xl font-extrabold text-[#0A192F]">100%</p>
                    <p class="text-xs text-gray-500 mt-0.5 font-semibold">Aman &amp; Terpercaya</p>
                </div>
            </div>

            {{-- Decorative game pills --}}
            <div class="anim-fadeup anim-delay-3 flex flex-wrap justify-center gap-2">
                @foreach ($games as $game)
                    <span
                        class="inline-flex items-center gap-2 px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-full text-xs font-bold text-slate-500">
                        @if (isset($game->icon_emoji))
                            <span class="text-base">{{ $game->icon_emoji }}</span>
                        @endif
                        {{ $game->name }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================== STICKY GAME TAB BAR ===================== --}}
    <div class="tab-bar-sticky">
        <div class="max-w-5xl mx-auto px-4">
            <div class="tab-scroll flex items-center justify-center gap-2.5 py-3 overflow-x-auto">
                @foreach ($games as $index => $game)
                    <button class="game-tab {{ $index === 0 ? 'active' : '' }}" data-game-tab="{{ $game->id }}"
                        onclick="switchGame('{{ $game->id }}')">
                        @if (isset($game->icon_emoji))
                            <span>{{ $game->icon_emoji }}</span>
                        @endif
                        {{ $game->name }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ===================== MAIN CONTENT ===================== --}}
    <main class="bg-slate-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-14">

            @foreach ($games as $index => $game)
                <div id="game-{{ $game->id }}" class="game-section {{ $index === 0 ? 'active' : '' }}">

                    {{-- ---- Section Title ---- --}}
                    <div class="flex items-center gap-4 mb-10">
                        <div class="divider-line-left"></div>
                        <h2
                            class="text-2xl md:text-3xl font-extrabold text-[#0A192F] tracking-tight shrink-0 flex items-center gap-3">
                            @if (isset($game->icon_emoji))
                                <span
                                    class="flex items-center justify-center w-10 h-10 rounded-xl bg-orange-50 text-xl">{{ $game->icon_emoji }}</span>
                            @endif
                            {{ $game->name }}
                        </h2>
                        <div class="divider-line-right"></div>
                    </div>

                    {{-- ---- PAKET BUNDLE ---- --}}
                    @if ($game->packages->count() > 0)
                        <div class="mb-16">

                            {{-- Sub-header --}}
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-orange-100 text-[#FF8323]">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 10V7" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-[#0A192F]">Paket Bundle</h3>
                                <span
                                    class="px-2.5 py-0.5 rounded-full bg-orange-50 text-orange-600 border border-orange-100 text-xs font-bold">
                                    {{ $game->packages->count() }} paket
                                </span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
                                @foreach ($game->packages as $package)
                                    <div
                                        class="pkg-card {{ $package->badge ? 'pkg-card--highlight' : '' }} p-6 flex flex-col">

                                        {{-- Top row: tier + badge --}}
                                        <div class="flex items-start justify-between mb-3">
                                            <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">
                                                {{ $package->tier_name }}
                                            </span>
                                            @if ($package->badge)
                                                <span
                                                    class="bg-[#FF8323] text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full uppercase tracking-widest shadow-sm">
                                                    {{ $package->badge }}
                                                </span>
                                            @endif
                                        </div>

                                        {{-- Name --}}
                                        <h4 class="text-lg font-extrabold text-[#0A192F] leading-snug mb-1">
                                            {{ $package->name }}
                                        </h4>

                                        {{-- Price --}}
                                        <p class="text-2xl font-extrabold text-[#FF8323] mt-1 mb-5">
                                            {{ $package->price_label ?? 'Rp ' . number_format($package->price, 0, ',', '.') }}
                                        </p>

                                        {{-- Features --}}
                                        <ul class="space-y-2.5 text-sm text-gray-600 mb-6 flex-grow font-medium">
                                            @foreach ($package->features as $feature)
                                                <li class="flex items-start gap-2.5">
                                                    {{-- Checkmark circle hijau --}}
                                                    <span
                                                        class="flex-shrink-0 mt-0.5 w-[18px] h-[18px] rounded-full bg-green-100 text-green-600 flex items-center justify-center font-black text-[10px] leading-none">✓</span>
                                                    <span>{{ is_array($feature) ? $feature['feature'] ?? '' : $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>

                                        {{-- CTA --}}
                                        <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Saya tertarik dengan joki ' . $game->name . ' untuk paket ' . $package->name) }}"
                                            target="_blank"
                                            class="block w-full text-center py-3 rounded-[14px] text-sm font-bold transition mt-auto
                                                {{ $package->badge
                                                    ? 'bg-[#FF8323] text-white hover:bg-[#e6731f] shadow-lg hover:shadow-xl'
                                                    : 'bg-slate-100 text-[#0A192F] border border-slate-200 hover:bg-[#FF8323] hover:text-white hover:border-[#FF8323]' }}">
                                            Pilih Paket Ini
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- ---- LAYANAN SATUAN (ACCORDION COLLAPSIBLE) ---- --}}
                    @if ($game->categories->count() > 0)
                        <div>
                            {{-- Sub-header --}}
                            <div class="flex items-center gap-3 mb-5">
                                <div
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-50 text-blue-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-[#0A192F]">Layanan Satuan</h3>
                                <p
                                    class="text-xs text-gray-500 font-medium ml-1 bg-white px-2 py-1 rounded-md border border-gray-200">
                                    Pilih kategori di bawah 👇
                                </p>
                            </div>

                            <div class="space-y-3">
                                @foreach ($game->categories as $category)
                                    @if ($category->services->count() > 0)
                                        {{-- Gunakan <details> untuk efek buka-tutup. Loop pertama otomatis terbuka (open) --}}
                                        <details
                                            class="group bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden [&_summary::-webkit-details-marker]:hidden"
                                            {{ $loop->first ? 'open' : '' }}>

                                            {{-- Category header (Bisa diklik) --}}
                                            <summary
                                                class="px-5 py-4 bg-slate-50 hover:bg-slate-100 transition cursor-pointer flex items-center gap-3 select-none">
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-[#FF8323] flex-shrink-0"></span>
                                                <span
                                                    class="text-sm font-bold text-[#0A192F] uppercase tracking-widest flex-grow group-hover:text-[#FF8323] transition-colors">
                                                    {{ $category->name }}
                                                </span>
                                                <span
                                                    class="text-[11px] text-gray-500 font-semibold bg-gray-200/70 px-2.5 py-0.5 rounded-full">
                                                    {{ $category->services->count() }} item
                                                </span>
                                                {{-- Ikon panah (akan berputar saat dibuka) --}}
                                                <span
                                                    class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#FF8323] ml-1">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            {{-- Service rows (Isi layanannya) --}}
                                            <div class="divide-y divide-gray-100 border-t border-gray-200">
                                                @foreach ($category->services as $service)
                                                    @php
                                                        $price = 'Rp ' . number_format($service->price, 0, ',', '.');
                                                        $maxP = $service->price_max
                                                            ? '–' . number_format($service->price_max, 0, ',', '.')
                                                            : '';
                                                        $unit = $service->price_unit ? ' ' . $service->price_unit : '';
                                                        $waText = urlencode(
                                                            'Halo Digitify! Saya tertarik dengan joki ' .
                                                                $game->name .
                                                                ' — ' .
                                                                $service->name,
                                                        );
                                                    @endphp
                                                    <a href="https://wa.me/6281226110988?text={{ $waText }}"
                                                        target="_blank"
                                                        class="svc-row flex items-center justify-between px-5 py-4 gap-4 group/item">

                                                        <div class="min-w-0">
                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                <span
                                                                    class="svc-name text-sm font-bold text-gray-800 transition leading-snug group-hover/item:text-[#FF8323]">
                                                                    {{ $service->name }}
                                                                </span>
                                                                @if ($service->badge)
                                                                    <span
                                                                        class="bg-orange-50 text-orange-600 border border-orange-100 text-[10px] font-bold px-2 py-0.5 rounded-full flex-shrink-0">
                                                                        {{ $service->badge }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            @if ($service->description)
                                                                <p
                                                                    class="text-xs text-gray-400 mt-1.5 font-medium leading-relaxed">
                                                                    {{ $service->description }}
                                                                </p>
                                                            @endif
                                                        </div>

                                                        <div class="flex items-center gap-3 flex-shrink-0">
                                                            <span
                                                                class="svc-price text-[#0A192F] font-bold text-sm font-mono whitespace-nowrap transition group-hover/item:text-[#FF8323]">
                                                                {{ $price . $maxP . $unit }}
                                                            </span>
                                                            <span
                                                                class="svc-arrow w-7 h-7 rounded-full bg-slate-100 text-gray-400 flex items-center justify-center transition flex-shrink-0 shadow-sm text-sm font-bold group-hover/item:bg-[#FF8323] group-hover/item:text-white">
                                                                ›
                                                            </span>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </details>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mt-16 h-px bg-gray-200 block md:hidden"></div>
                </div>
            @endforeach

            {{-- ---- Empty state ---- --}}
            @if ($games->isEmpty())
                <div class="text-center py-24 text-gray-500">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="font-bold text-gray-700 text-lg">Belum ada layanan game tersedia.</p>
                    <p class="text-sm mt-1 text-gray-500">Silakan cek kembali nanti atau hubungi kami via WhatsApp.</p>
                </div>
            @endif
        </div>

        {{-- ===================== GALERI & BUKTI JOKI (DINAMIS) ===================== --}}
        @if ($portfolios->count() > 0)
            <div class="max-w-5xl mx-auto px-4 sm:px-6 py-16 border-t border-gray-200">
                <div class="text-center mb-10">
                    <span
                        class="inline-flex items-center gap-2 px-3 py-1 bg-orange-50 text-[#FF8323] font-bold rounded-full text-xs mb-3 border border-orange-100 uppercase tracking-widest">
                        Galeri In-Game
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0A192F]">
                        Bukti Hasil <span class="text-[#FF8323]">Grinding</span> Kami
                    </h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-5">
                    @foreach ($portfolios as $portfolio)
                        <div
                            class="relative aspect-video rounded-xl overflow-hidden shadow-sm group cursor-pointer border border-gray-100 bg-gray-200">
                            <img src="{{ asset('storage/' . $portfolio->image_path) }}"
                                alt="{{ $portfolio->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#0A192F]/80 via-[#0A192F]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                                <p class="text-white text-sm font-bold">{{ $portfolio->title }}</p>
                                @if ($portfolio->description)
                                    <p class="text-gray-300 text-[10px] mt-1 line-clamp-2">
                                        {{ $portfolio->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ===================== FAQ SECTION (DINAMIS) ===================== --}}
        @if ($faqs->count() > 0)
            <div id="faq" class="max-w-3xl mx-auto px-4 sm:px-6 py-16 border-t border-gray-200">
                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0A192F]">
                        Pertanyaan Seputar <span class="text-[#FF8323]">Joki Game</span>
                    </h2>
                    <p class="text-gray-500 mt-3 text-sm font-medium">Yang sering ditanyakan oleh pelanggan kami.</p>
                </div>

                <div class="space-y-4">
                    @foreach ($faqs as $faq)
                        <details
                            class="group bg-white border border-gray-200 rounded-2xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex items-center justify-between p-5 cursor-pointer font-bold text-[#0A192F] hover:text-[#FF8323] transition-colors">
                                <span>{{ $faq->question }}</span>
                                <span class="transition duration-300 group-open:-rotate-180 text-[#FF8323]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </summary>
                            <div
                                class="px-5 pb-5 text-gray-500 text-sm leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                {!! nl2br(e($faq->answer)) !!}
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ---- CTA Bottom Banner ---- --}}
        <div class="bg-white border-t border-gray-200 relative overflow-hidden">

            {{-- Dot grid pattern --}}
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
                style="background-image: radial-gradient(circle, rgba(255,131,35,0.09) 1px, transparent 1px); background-size: 24px 24px;
                       mask-image: radial-gradient(ellipse 70% 70% at 50% 100%, black 0%, transparent 70%);
                       -webkit-mask-image: radial-gradient(ellipse 70% 70% at 50% 100%, black 0%, transparent 70%);">
            </div>

            {{-- Bottom glow blob --}}
            <div class="absolute -bottom-16 left-1/2 -translate-x-1/2 w-[400px] h-[200px] rounded-full pointer-events-none"
                style="background: rgba(255,131,35,0.07);" aria-hidden="true"></div>

            <div class="relative max-w-3xl mx-auto px-6 py-20 text-center">
                <p class="text-gray-400 text-xs uppercase tracking-widest mb-3 font-extrabold">
                    Butuh Bantuan Lain?
                </p>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0A192F] mb-4 leading-snug">
                    Belum Menemukan Paket yang <span class="text-[#FF8323]">Sesuai?</span>
                </h2>
                <p class="text-gray-500 text-sm md:text-base mb-8 max-w-xl mx-auto leading-relaxed font-medium">
                    Entah itu butuh <i>farming</i> material spesifik, <i>clear</i> map 100%, selesaiin <i>Quest</i>
                    yang numpuk, atau <i>maintenance</i> harian. Kalau nggak ada di daftar, kasih tau aja!
                </p>
                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Aku butuh joki untuk Genshin/WuWa, tapi kebutuhanku (misal: farming spesifik/quest/eksplorasi) sepertinya nggak ada di pilihan paket website. Bisa diskusi untuk harga custom?') }}"
                    target="_blank"
                    class="inline-flex items-center gap-2.5 bg-[#FF8323] text-white px-8 py-4 rounded-full font-bold text-sm hover:bg-[#e6731f] transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12c0 2.115.554 4.1 1.523 5.824L.057 23.3a.75.75 0 00.923.923l5.476-1.466A11.95 11.95 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.9 0-3.68-.497-5.22-1.367l-.374-.217-3.882 1.04 1.04-3.882-.217-.374A9.955 9.955 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                    </svg>
                    Request Paket Custom
                </a>
            </div>
        </div>
    </main>

    <footer id="tentang-kami" class="bg-white border-t border-slate-100 py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-[1fr,2fr] gap-12 items-center">
            {{-- Bagian Kiri: Tentang Kami --}}
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-bold text-[#0A192F] mb-6">
                    Tentang Kami
                </h2>
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-6 mb-8">
                    <img src="{{ asset('logo.png') }}" alt="Digitify Logo / Naufal Fathi Portrait"
                        class="w-28 h-28 rounded-full shadow-md object-cover border-4 border-slate-50" />
                    <div>
                        <p class="text-2xl font-bold text-gray-900">
                            Digitify
                        </p>
                        <p class="text-md text-[#FF8323] font-semibold mt-1">
                            Professional Game Services
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed max-w-lg mx-auto md:mx-0">
                    Solusi terpercaya untuk progress akunmu. Kami hadir untuk membantu kamu melewati proses
                    <i>grinding</i>, <i>farming</i>, dan penyelesaian misi yang memakan waktu. Nikmati gamenya, biarkan
                    kami yang bekerja keras untuk akunmu dengan cepat dan aman.
                </p>
            </div>

            {{-- Bagian Kanan: Kontak & CTA --}}
            <div class="text-center">
                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Aku mau tanya-tanya dulu soal layanan joki game-nya nih. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="inline-block bg-[#FF8323] text-white px-10 py-5 rounded-full font-bold text-xl hover:bg-[#e6731f] transition duration-200 shadow-xl mb-12 transform hover:-translate-y-1">
                    KONSULTASI & ORDER SEKARANG
                </a>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center text-gray-800">
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-6 h-6 text-[#FF8323]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-3.28a1 1 0 01-.948-.684l-1.498-4.493a1 1 0 01.502-1.21l2.257-1.13a11.042 11.042 0 00-5.516-5.516l-1.13 2.257a1 1 0 01-1.21.502l-4.493-1.498a1 1 0 01-.684-.949V5z">
                            </path>
                        </svg>
                        <p class="font-semibold text-lg">No Telp / WA:</p>
                        <a href="https://wa.me/6281226110988" target="_blank"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline transition">
                            0812-2611-0988
                        </a>
                    </div>
                    <div
                        class="flex flex-col items-center gap-2 border-t sm:border-t-0 sm:border-l sm:border-r border-slate-100 pt-6 sm:pt-0">
                        <svg class="w-6 h-6 text-[#FF8323]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <p class="font-semibold text-lg">Email:</p>
                        <a href="mailto:naufalfathi37@gmail.com"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline transition">
                            naufalfathi37@gmail.com
                        </a>
                    </div>
                    <div
                        class="flex flex-col items-center gap-2 border-t sm:border-t-0 sm:border-l border-slate-100 pt-6 sm:pt-0">
                        <svg class="w-6 h-6 text-[#FF8323]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.826a4 4 0 015.656 0l4 4a4 4 0 01-5.656 5.656l-1.1-1.1">
                            </path>
                        </svg>
                        <p class="font-semibold text-lg">Web:</p>
                        <a href="http://www.digitify.my.id" target="_blank"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline">
                            www.digitify.my.id
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bagian Bawah: Copyright & Links --}}
        <div
            class="max-w-7xl mx-auto px-6 mt-16 pt-10 border-t border-slate-100 text-center flex flex-col items-center gap-4">
            <p class="text-2xl font-bold text-[#0A192F]">Powered by B1NG EMPIRE</p>

            <div class="flex items-center gap-2 mb-2">
                <span class="text-lg font-bold text-[#0A192F]">Digitify</span>
            </div>

            <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 mt-2 text-sm font-medium">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-[#FF8323] transition">Website Development</a>
                <a href="/ai-showroom" class="text-gray-500 hover:text-[#FF8323] transition">AI Showroom</a>
                <a href="{{ route('mars-vision.index') }}" class="text-gray-500 hover:text-[#FF8323] transition">Mars
                    Vision</a>
                <a href="https://bingempire.my.id/" class="text-gray-500 hover:text-[#FF8323] transition">B1NG
                    Empire</a>
            </div>

            <p class="text-gray-400 text-xs mt-4">
                &copy; {{ date('Y') }} Digitify. All Rights Reserved.
            </p>
        </div>
    </footer>

    {{-- ===================== SCRIPTS ===================== --}}
    <script>
        // Mobile menu toggle logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');
        let isMenuOpen = false;

        btn.addEventListener('click', function() {
            isMenuOpen = !isMenuOpen;

            if (isMenuOpen) {
                // Munculkan menu
                menu.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none');
                menu.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');

                // Animasi ikon hamburger menjadi silang
                iconMenu.classList.replace('scale-100', 'scale-50');
                iconMenu.classList.replace('opacity-100', 'opacity-0');
                iconClose.classList.replace('scale-50', 'scale-100');
                iconClose.classList.replace('opacity-0', 'opacity-100');
                iconClose.classList.replace('rotate-[-90deg]', 'rotate-0');
            } else {
                // Sembunyikan menu
                menu.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                menu.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');

                // Animasi silang kembali ke hamburger
                iconMenu.classList.replace('scale-50', 'scale-100');
                iconMenu.classList.replace('opacity-0', 'opacity-100');
                iconClose.classList.replace('scale-100', 'scale-50');
                iconClose.classList.replace('opacity-100', 'opacity-0');
                iconClose.classList.replace('rotate-0', 'rotate-[-90deg]');
            }
        });

        // Game tab switcher
        function switchGame(gameId) {
            document.querySelectorAll('.game-section').forEach(function(el) {
                el.classList.remove('active');
            });

            var target = document.getElementById('game-' + gameId);
            if (target) target.classList.add('active');

            document.querySelectorAll('[data-game-tab]').forEach(function(btn) {
                btn.classList.toggle('active', btn.getAttribute('data-game-tab') === String(gameId));
            });

            var offset = 140;
            var top = document.querySelector('main').getBoundingClientRect().top + window.scrollY - offset;
            window.scrollTo({
                top: top,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
