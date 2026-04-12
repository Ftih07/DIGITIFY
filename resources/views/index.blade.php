<!doctype html>
<html lang="id" class="scroll-smooth scroll-pt-16">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Jasa Pembuatan Website Purwokerto | Digitify Web Development</title>
    <meta name="title" content="Jasa Pembuatan Website Purwokerto - Digitify UMKM" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='19' stroke='%23FF8323' stroke-width='2' /%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' dy='.3em' font-family='Arial' font-weight='bold' font-size='24' fill='%23FF8323'%3ED%3C/text%3E%3C/svg%3E">
    <meta name="description" content="Jasa pembuatan website di Purwokerto untuk UMKM & bisnis lokal. Dari landing page hingga sistem e-commerce, siap online cepat & profesional." />
    <meta name="keywords" content="jasa website purwokerto, bikin web murah purwokerto, buat website umkm, jasa landing page, web developer banyumas, digitify, naufal fathi" />
    <meta name="author" content="Naufal Fathi - Digitify" />
    <meta name="robots" content="index, follow" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.digitify.my.id/" />
    <meta property="og:title" content="Jasa Pembuatan Website Purwokerto - Digitify" />
    <meta property="og:description" content="Solusi pembuatan website murah dan profesional untuk UMKM di Purwokerto. Harga mulai Rp300rb terima beres!" />
    <meta property="og:image" content="{{ asset('logo.png') }}" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://www.digitify.my.id/" />
    <meta property="twitter:title" content="Jasa Pembuatan Website Purwokerto - Digitify" />
    <meta property="twitter:description" content="Solusi pembuatan website murah dan profesional untuk UMKM di Purwokerto. Harga mulai Rp300rb terima beres!" />
    <meta property="twitter:image" content="{{ asset('logo.png') }}" />

    <meta name="theme-color" content="#0A192F" />

    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Digitify Web Development",
            "image": "https://www.digitify.my.id/logo.png",
            "@id": "https://www.digitify.my.id",
            "url": "https://www.digitify.my.id",
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
            "areaServed": ["Purwokerto", "Banyumas", "Sokaraja"],
            "founder": {
                "@type": "Person",
                "name": "Naufal Fathi"
            },
            "description": "Jasa pembuatan website profesional untuk UMKM di Purwokerto."
        }
    </script>
    @endverbatim

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom geometric backgrounds for hero */
        .hero-accent {
            position: absolute;
            inset: 0;
            z-index: -1;
            overflow: hidden;
        }

        .hero-accent::before,
        .hero-accent::after {
            content: "";
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
        }

        .hero-accent::before {
            background-color: #ff8323;
            transform: rotate(35deg) translateY(-20%);
        }

        .hero-accent::after {
            background-color: #0a192f;
            transform: rotate(35deg) translateY(40%);
        }

        /* Ribbon effect */
        .ribbon {
            position: absolute;
            top: 10px;
            right: -30px;
            background-color: #0a192f;
            color: white;
            padding: 4px 40px;
            transform: rotate(45deg);
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Efek Animasi Melayang (Floating) */
        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(3deg);
            }
        }

        @keyframes float-medium {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-15px) scale(1.05);
            }
        }

        .animate-float-slow {
            animation: float-slow 7s ease-in-out infinite;
        }

        .animate-float-medium {
            animation: float-medium 5s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-medium 6s ease-in-out 3s infinite;
        }
    </style>
</head>

<body class="bg-slate-50 text-gray-900 font-sans">
    <header class="bg-white sticky top-0 z-50 shadow-sm relative">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between bg-white relative z-50">
            <div class="flex items-center gap-2">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="19" stroke="#FF8323" stroke-width="2" />
                    <text x="50%" y="55%" text-anchor="middle" dy=".3em" font-family="Arial" font-weight="bold" font-size="24" fill="#FF8323">D</text>
                </svg>
                <span class="text-2xl font-bold text-[#0A192F]">Digitify</span>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <a href="#home" class="nav-link text-gray-700 hover:text-[#FF8323] transition">Home</a>
                <a href="#harga" class="nav-link text-gray-700 hover:text-[#FF8323] transition">Harga</a>
                <a href="#portofolio" class="nav-link text-gray-700 hover:text-[#FF8323] transition">Portofolio</a>
                <a href="#faq" class="nav-link text-gray-700 hover:text-[#FF8323] transition">FAQ</a>
                <a href="#tentang-saya" class="nav-link text-gray-700 hover:text-[#FF8323] transition">Tentang Saya</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="hidden md:block bg-[#FF8323] text-white px-6 py-2.5 rounded-full font-semibold hover:bg-[#e6731f] transition duration-200">
                    KONSULTASI PROYEK
                </a>

                <button id="mobile-menu-btn" class="md:hidden text-gray-800 hover:text-[#FF8323] focus:outline-none relative w-8 h-8 flex items-center justify-center">
                    <svg id="icon-menu" class="w-7 h-7 absolute transition-all duration-300 transform scale-100 opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="icon-close" class="w-7 h-7 absolute transition-all duration-300 transform scale-50 opacity-0 rotate-[-90deg]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="absolute w-full left-0 top-full bg-white shadow-xl border-t border-gray-100 transform -translate-y-4 opacity-0 pointer-events-none transition-all duration-300 ease-in-out z-40">
            <div class="flex flex-col px-6 pb-6 pt-4 gap-4">
                <a href="#home" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Home</a>
                <a href="#harga" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Harga</a>
                <a href="#portofolio" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Portofolio</a>
                <a href="#faq" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">FAQ</a>
                <a href="#tentang-saya" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Tentang Saya</a>

                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="bg-[#FF8323] text-white text-center py-3 rounded-xl font-bold mt-2 shadow-md">
                    KONSULTASI PROYEK
                </a>
            </div>
        </div>
    </header>

    <section id="home" class="relative bg-white py-24 md:py-32 overflow-hidden">
        <div class="hero-accent"></div>

        <div class="absolute top-1/4 left-10 w-72 h-72 bg-[#FF8323] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse"></div>
        <div class="absolute top-1/3 right-10 w-72 h-72 bg-[#0A192F] rounded-full mix-blend-multiply filter blur-[100px] opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="hidden lg:flex absolute top-32 left-[10%] animate-float-slow items-center gap-3 bg-white/70 backdrop-blur-md px-5 py-3 rounded-2xl shadow-xl border border-white z-20">
            <div class="bg-orange-100 p-2 rounded-full text-[#FF8323]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <span class="font-bold text-[#0A192F] text-sm">Bisnis Go Digital</span>
        </div>

        <div class="hidden lg:flex absolute bottom-32 right-[10%] animate-float-delayed items-center gap-3 bg-white/70 backdrop-blur-md px-5 py-3 rounded-2xl shadow-xl border border-white z-20">
            <div class="bg-blue-50 p-2 rounded-full text-[#0A192F]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="font-bold text-[#0A192F] text-sm">Sistem Terpercaya</span>
        </div>

        <div class="absolute top-24 right-1/4 animate-float-medium z-10 hidden md:block">
            <svg width="40" height="40" viewBox="0 0 40 40" class="text-gray-300 opacity-60">
                <circle cx="20" cy="20" r="15" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="4 4" />
            </svg>
        </div>
        <div class="absolute bottom-24 left-1/4 animate-float-slow z-10 hidden md:block" style="animation-delay: 1.5s;">
            <svg width="30" height="30" viewBox="0 0 30 30" class="text-[#FF8323] opacity-40">
                <rect x="5" y="5" width="20" height="20" fill="none" stroke="currentColor" stroke-width="3" transform="rotate(45 15 15)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-30">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#0A192F] leading-tight max-w-4xl mx-auto drop-shadow-sm">
                DIGITALISASI UMKM LEBIH MUDAH & TERJANGKAU
            </h1>
            <p class="mt-8 text-xl text-gray-800 max-w-3xl mx-auto font-medium">
                Solusi Website Profesional untuk Berbagai Jenis Usaha.<br />
                Cocok untuk Retail, F&B, Jasa, hingga Perusahaan Skala Menengah.
            </p>
            <div class="mt-12 flex items-center justify-center gap-6 flex-wrap">
                <a href="#harga" class="bg-[#FF8323] text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-[#e6731f] transition duration-200 shadow-xl hover:-translate-y-1 transform">
                    LIHAT KATALOG HARGA
                </a>
                <a href="#portofolio" class="text-[#FF8323] font-bold text-lg hover:underline flex items-center gap-1 group">
                    Cek Hasil Karya Kami
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="harga" class="py-20 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 px-4 py-1.5 bg-green-100 text-green-700 font-bold rounded-full text-sm mb-4 border border-green-200">
                    <span class="relative flex h-2.5 w-2.5">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span
                            class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
                    </span>
                    HARGA KHUSUS EARLY CLIENT
                </span>
                <h2 class="text-3xl font-extrabold text-[#0A192F]">
                    Paket Website Terima Beres
                </h2>
                <p class="text-gray-500 mt-3 max-w-2xl mx-auto">
                    Website langsung jadi & online tanpa ribet Mulai dari
                    pembuatan hingga aktif 1 tahun penuh
                </p>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-6 lg:gap-8 items-stretch">
                <div
                    class="bg-white rounded-3xl p-8 shadow-md border border-gray-200 flex flex-col hover:border-[#FF8323]/30 hover:shadow-xl transition duration-300 relative">
                    <h3 class="font-bold text-lg text-gray-800 mb-1">
                        Web Template
                    </h3>
                    <p class="text-gray-500 text-xs mb-4">
                        Landing Page Kilat
                    </p>

                    <div>
                        <p class="text-gray-500 text-sm font-medium mb-1">
                            Hanya
                        </p>
                        <p
                            class="text-4xl font-extrabold text-[#0A192F] mb-6">
                            <sup class="text-xl font-bold top-[-0.8em]">Rp</sup>300 - 800<span class="text-2xl">rb</span>
                        </p>
                    </div>

                    <ul
                        class="space-y-3 text-gray-600 flex-grow mb-6 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            Maksimal 1 Halaman
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            Desain dari Katalog
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            Menggunakan Subdomain
                        </li>
                        <li class="flex items-start gap-2 opacity-50">
                            <span class="text-red-400 font-bold">❌</span>
                            Tanpa Custom Layout
                        </li>
                        <li class="flex items-start gap-2 opacity-50">
                            <span class="text-red-400 font-bold">❌</span>
                            Tanpa Revisi Besar
                        </li>
                    </ul>

                    <div class="border-t border-gray-100 pt-4 mb-6">
                        <p class="text-[11px] text-gray-500 leading-tight">
                            <span class="font-bold text-gray-700">Perpanjangan:</span>
                            Rp100.000/tahun (Biaya perawatan link & server
                            mulai tahun ke-2).
                        </p>
                    </div>

                    <a
                        href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                        target="_blank"
                        class="block w-full text-center bg-slate-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-slate-200 transition mt-auto">Pilih Paket</a>
                </div>

                <div
                    class="bg-white rounded-3xl p-8 shadow-md border border-gray-200 flex flex-col hover:border-[#FF8323]/30 hover:shadow-xl transition duration-300 relative">
                    <div
                        class="absolute -top-3 inset-x-0 flex justify-center">
                        <span
                            class="bg-blue-100 text-blue-700 border border-blue-200 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider">PAKET LOKAL</span>
                    </div>

                    <h3 class="font-bold text-lg text-gray-800 mb-1 mt-2">
                        Web Custom
                    </h3>
                    <p class="text-gray-500 text-xs mb-4">
                        Website Custom untuk Bisnis yang Ingin Terlihat
                        Profesional & Dipercaya
                    </p>

                    <div>
                        <p class="text-gray-500 text-sm font-medium mb-1">
                            Mulai dari
                        </p>
                        <p
                            class="text-4xl font-extrabold text-[#0A192F] mb-6">
                            <sup class="text-xl font-bold top-[-0.8em]">Rp</sup>1.5 - 2.9<span class="text-2xl">jt</span>
                        </p>
                    </div>

                    <ul
                        class="space-y-3 text-gray-600 flex-grow mb-6 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            Desain Semi-Custom
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            3 - 5 Halaman Responsif
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 font-bold">✔</span>
                            Integrasi Form WA
                        </li>
                        <li
                            class="flex items-start gap-2 bg-blue-50 p-1.5 rounded-md">
                            <span class="text-blue-600 font-bold">🎉</span>
                            <span class="font-semibold text-blue-800">Bonus Domain .my.id + Hosting 1 Tahun</span>
                        </li>
                    </ul>

                    <div class="border-t border-gray-100 pt-4 mb-6">
                        <p class="text-[11px] text-gray-500 leading-tight">
                            <span class="font-bold text-gray-700">Perpanjangan:</span>
                            Rp350.000/tahun (Untuk domain .my.id & server
                            mulai tahun ke-2).
                        </p>
                    </div>

                    <a
                        href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                        target="_blank"
                        class="block w-full text-center border-2 border-[#0A192F] text-[#0A192F] py-2.5 rounded-xl font-semibold hover:bg-[#0A192F] hover:text-white transition mt-auto">Pilih Paket</a>
                </div>

                <div
                    class="bg-white rounded-3xl p-8 shadow-2xl border-2 border-[#FF8323] flex flex-col relative z-20 transform md:-translate-y-4">
                    <div
                        class="absolute top-0 inset-x-0 flex justify-center transform -translate-y-1/2">
                        <span
                            class="bg-[#FF8323] text-white px-4 py-1.5 rounded-full text-sm font-bold tracking-wider shadow-lg flex items-center gap-1">⭐ BEST SELLER</span>
                    </div>

                    <h3 class="font-bold text-lg text-[#0A192F] mb-1 mt-3">
                        Web + Sistem CMS
                    </h3>
                    <p class="text-gray-500 text-xs mb-4">
                        Website + Sistem Kelola Konten Sendiri (Tanpa Ribet
                        Developer)
                    </p>

                    <div>
                        <p class="text-gray-500 text-sm font-medium mb-1">
                            Mulai dari
                        </p>
                        <p
                            class="text-4xl font-extrabold text-[#0A192F] mb-6">
                            <sup class="text-xl font-bold top-[-0.8em]">Rp</sup>2.9 - 6.9<span class="text-2xl">jt</span>
                        </p>
                    </div>

                    <ul
                        class="space-y-3 text-gray-700 flex-grow mb-6 text-sm font-medium">
                        <li class="flex items-start gap-2">
                            <span class="text-[#FF8323] font-bold">✔</span>
                            Dashboard Admin Panel
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#FF8323] font-bold">✔</span>
                            CRUD Konten & Database
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#FF8323] font-bold">✔</span>
                            Manajemen Fitur Dinamis
                        </li>
                        <li
                            class="flex items-start gap-2 bg-orange-50 p-1.5 rounded-md border border-orange-100">
                            <span class="text-[#FF8323] font-bold">🎉</span>
                            <span class="font-bold text-orange-800">Bonus Domain .COM + Hosting 1 Tahun</span>
                        </li>
                    </ul>

                    <div class="border-t border-orange-100 pt-4 mb-6">
                        <p class="text-[11px] text-gray-500 leading-tight">
                            <span class="font-bold text-[#0A192F]">Perpanjangan:</span>
                            Rp500.000/tahun (Untuk domain .COM & server
                            mulai tahun ke-2).
                        </p>
                    </div>

                    <a
                        href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                        target="_blank"
                        class="block w-full text-center bg-[#FF8323] text-white py-3.5 rounded-xl font-bold shadow-lg hover:bg-[#e6731f] hover:shadow-xl transition transform hover:-translate-y-0.5 mt-auto">Pilih Paket Ini</a>
                </div>

                <div
                    class="bg-[#0A192F] text-white rounded-3xl p-8 shadow-2xl flex flex-col relative overflow-hidden">
                    <div
                        class="absolute top-6 right-0 bg-gradient-to-r from-[#FF8323] to-amber-500 text-white text-xs font-bold px-4 py-1 uppercase tracking-widest rounded-l-full shadow-lg">
                        PREMIUM
                    </div>

                    <h3 class="font-bold text-lg text-white mb-1">
                        E-Commerce / POS
                    </h3>
                    <p class="text-gray-400 text-xs mb-4">
                        Sistem Penjualan Online & Operasional Bisnis
                        (All-in-One)
                    </p>

                    <div>
                        <p class="text-gray-400 text-sm font-medium mb-1">
                            Mulai dari
                        </p>
                        <p class="text-4xl font-extrabold text-white mb-6">
                            <sup
                                class="text-xl font-bold top-[-0.8em] text-gray-300">Rp</sup>6.9 - 15<span class="text-2xl">jt+</span>
                        </p>
                    </div>

                    <ul
                        class="space-y-3 text-gray-300 flex-grow mb-6 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✔</span>
                            Aplikasi Kasir / Toko Online
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✔</span>
                            Laporan Keuangan & Stok
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✔</span>
                            Integrasi Payment Gateway
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✔</span>
                            Termasuk Setup VPS/Cloud Awal
                        </li>
                    </ul>

                    <div class="border-t border-slate-700 pt-4 mb-6">
                        <p class="text-[11px] text-gray-400 leading-tight">
                            <span class="font-bold text-white">Perpanjangan:</span>
                            Mulai ~Rp1.000.000/tahun (Tergantung spesifikasi
                            VPS & Trafik).
                        </p>
                    </div>

                    <a
                        href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                        target="_blank"
                        class="block w-full text-center bg-white text-[#0A192F] py-3 rounded-xl font-bold hover:bg-gray-100 transition mt-auto">Konsultasi Khusus</a>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio" class="py-16 md:py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0A192F]">Portofolio & Hasil Kerja</h2>
                <p class="text-gray-500 mt-2 text-sm md:text-base">Beberapa sistem dan website yang telah kami kembangkan</p>
            </div>

            <div class="flex flex-wrap justify-center gap-2 mb-10" id="filter-buttons">
                <button data-filter="all" class="filter-btn px-4 py-1.5 rounded-full bg-[#0A192F] text-white font-medium text-xs md:text-sm transition-all duration-300">Semua Proyek</button>
                <button data-filter="WEB TEMPLATE" class="filter-btn px-4 py-1.5 rounded-full bg-slate-100 text-gray-600 hover:bg-slate-200 font-medium text-xs md:text-sm transition-all duration-300">Template</button>
                <button data-filter="WEB CUSTOM" class="filter-btn px-4 py-1.5 rounded-full bg-slate-100 text-gray-600 hover:bg-slate-200 font-medium text-xs md:text-sm transition-all duration-300">Custom</button>
                <button data-filter="WEB DENGAN CMS" class="filter-btn px-4 py-1.5 rounded-full bg-slate-100 text-gray-600 hover:bg-slate-200 font-medium text-xs md:text-sm transition-all duration-300">CMS</button>
                <button data-filter="E-COMMERCE & POS" class="filter-btn px-4 py-1.5 rounded-full bg-slate-100 text-gray-600 hover:bg-slate-200 font-medium text-xs md:text-sm transition-all duration-300">E-Commerce & POS</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500" id="portfolio-grid">
                @forelse($portfolios as $portfolio)

                @php
                $cat = strtoupper($portfolio->category);
                $colorClass = match($cat) {
                'E-COMMERCE & POS' => 'bg-orange-100 text-orange-700 border-orange-200',
                'WEB DENGAN CMS' => 'bg-blue-100 text-blue-700 border-blue-200',
                'WEB CUSTOM' => 'bg-purple-100 text-purple-700 border-purple-200',
                'WEB TEMPLATE' => 'bg-slate-100 text-slate-700 border-slate-200',
                default => 'bg-gray-100 text-gray-700 border-gray-200'
                };
                @endphp

                <div class="portfolio-card group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl transition-all duration-500 ease-out transform" data-category="{{ $cat }}">
                    <div class="h-40 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                        <img src="{{ Storage::url($portfolio->image_path) }}" alt="{{ $portfolio->title }}" class="object-cover w-full h-full opacity-90 group-hover:scale-110 group-hover:opacity-100 transition duration-700 ease-in-out">

                        @if($portfolio->preview_link)
                        <div class="absolute inset-0 bg-[#0A192F]/80 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center backdrop-blur-sm">
                            <a href="{{ $portfolio->preview_link }}" target="_blank" class="bg-[#FF8323] text-white px-5 py-2 text-sm rounded-full font-medium transform translate-y-6 group-hover:translate-y-0 transition-all duration-500 hover:bg-[#e06d1b] hover:shadow-lg">Live Preview</a>
                        </div>
                        @endif
                    </div>

                    <div class="p-5 relative">
                        <span class="inline-block px-2.5 py-1 text-[10px] md:text-xs font-bold rounded-full border mb-2 {{ $colorClass }}">{{ $portfolio->category }}</span>

                        <h3 class="text-xl font-bold text-[#0A192F] mb-1.5 leading-tight">{{ $portfolio->title }}</h3>
                        <p class="text-gray-600 text-xs md:text-sm line-clamp-2 mb-4">{{ $portfolio->description }}</p>

                        <button
                            class="open-modal-btn text-[#FF8323] hover:text-[#e06d1b] font-semibold text-xs md:text-sm inline-flex items-center transition-all duration-300 group-hover:translate-x-1"
                            data-title="{{ $portfolio->title }}"
                            data-category="{{ $portfolio->category }}"
                            data-color="{{ $colorClass }}"
                            data-image="{{ Storage::url($portfolio->image_path) }}"
                            data-desc="{{ $portfolio->description }}"
                            data-link="{{ $portfolio->preview_link ?? '' }}">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-10 text-gray-500">
                    Belum ada portofolio yang ditambahkan.
                </div>
                @endforelse
            </div>
        </div>

        <div id="portfolioModal" class="fixed inset-0 z-50 hidden items-center justify-center px-4 overflow-y-auto overflow-x-hidden bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300">
            <div class="relative w-full max-w-2xl my-8 mx-auto">
                <div id="modalContent" class="relative bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 translate-y-10 opacity-0 transition-all duration-500 ease-out">
                    <button id="closeModal" class="absolute top-3 right-3 z-10 w-8 h-8 bg-black/40 hover:bg-black/70 hover:rotate-90 text-white rounded-full flex items-center justify-center transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="h-56 md:h-64 bg-slate-100 w-full relative overflow-hidden">
                        <img id="modalImage" src="" alt="" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>

                    <div class="p-6 md:p-8">
                        <span id="modalCategory" class="inline-block px-3 py-1 border text-xs font-bold rounded-full mb-3"></span>
                        <h3 id="modalTitle" class="text-xl md:text-2xl font-extrabold text-[#0A192F] mb-3"></h3>

                        <div class="text-gray-600 text-sm md:text-base leading-relaxed mb-6" id="modalDescription" style="white-space: pre-wrap;">
                        </div>

                        <div id="modalLinkContainer" class="hidden">
                            <a id="modalLink" href="#" target="_blank" class="inline-flex items-center px-5 py-2.5 bg-[#FF8323] hover:bg-[#e06d1b] text-white text-sm font-medium rounded-full shadow-lg shadow-[#FF8323]/30 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                                Kunjungi Live Preview
                                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-20 md:py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-[#0A192F]">Pertanyaan Seputar Layanan Kami</h2>
                <p class="text-gray-500 mt-3">Jawaban ringkas untuk hal-hal yang paling sering ditanyakan (FAQ)</p>
            </div>

            <div class="space-y-4">
                @foreach($faqs as $faq)
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <button class="faq-btn w-full flex items-center justify-between p-6 font-bold text-[#0A192F] focus:outline-none text-left">
                        <span>{{ $faq->question }}</span>
                        <span class="faq-icon transition-transform duration-300 ease-in-out text-[#FF8323] shrink-0 ml-4">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <div class="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-50 pt-4">
                            {!! nl2br(e($faq->answer)) !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer
        id="tentang-saya"
        class="bg-white border-t border-slate-100 py-16 md:py-20">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-[1fr,2fr] gap-12 items-center">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-bold text-[#0A192F] mb-6">
                    Tentang Kami
                </h2>
                <div
                    class="flex flex-col md:flex-row items-center gap-4 md:gap-6 mb-8">
                    <img
                        src="https://via.placeholder.com/150/0A192F/FFFFFF?text=NF"
                        alt="Naufal Fathi Portrait"
                        class="w-28 h-28 rounded-full shadow-md object-cover border-4 border-slate-50" />
                    <div>
                        <p class="text-2xl font-bold text-gray-900">
                            NAUFAL FATHI
                        </p>
                        <p
                            class="text-md text-[#FF8323] font-semibold mt-1">
                            Founder Digitify & CTO B1NG Empire
                        </p>
                    </div>
                </div>
                <p
                    class="text-gray-700 leading-relaxed max-w-lg mx-auto md:mx-0">
                    Spesialis pengembangan web modern. Dengan pemahaman
                    mendalam pada sistem operasional bisnis dan teknologi
                    terkini, kami siap mengubah visi usaha Anda menjadi
                    ekosistem digital yang nyata.
                </p>
            </div>

            <div class="text-center">
                <a
                    href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="inline-block bg-[#FF8323] text-white px-10 py-5 rounded-full font-bold text-xl hover:bg-[#e6731f] transition duration-200 shadow-xl mb-12 transform hover:-translate-y-1">MULAI PROYEK BERSAMA KAMI</a>

                <div
                    class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center text-gray-800">
                    <div class="flex flex-col items-center gap-2">
                        <svg
                            class="w-6 h-6 text-[#FF8323]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-3.28a1 1 0 01-.948-.684l-1.498-4.493a1 1 0 01.502-1.21l2.257-1.13a11.042 11.042 0 00-5.516-5.516l-1.13 2.257a1 1 0 01-1.21.502l-4.493-1.498a1 1 0 01-.684-.949V5z"></path>
                        </svg>
                        <p class="font-semibold text-lg">No Telp / WA:</p>
                        <a
                            href="https://wa.me/6281226110988"
                            target="_blank"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline transition">
                            0812-2611-0988
                        </a>
                    </div>
                    <div
                        class="flex flex-col items-center gap-2 border-t sm:border-t-0 sm:border-l sm:border-r border-slate-100 pt-6 sm:pt-0">
                        <svg
                            class="w-6 h-6 text-[#FF8323]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <p class="font-semibold text-lg">Email:</p>
                        <a
                            href="mailto:naufalfathi37@gmail.com"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline transition">
                            naufalfathi37@gmail.com
                        </a>
                    </div>
                    <div
                        class="flex flex-col items-center gap-2 border-t sm:border-t-0 sm:border-l border-slate-100 pt-6 sm:pt-0">
                        <svg
                            class="w-6 h-6 text-[#FF8323]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.826a4 4 0 015.656 0l4 4a4 4 0 01-5.656 5.656l-1.1-1.1"></path>
                        </svg>
                        <p class="font-semibold text-lg">Web:</p>
                        <a
                            href="http://www.digitify.my.id"
                            target="_blank"
                            class="text-gray-600 hover:text-[#FF8323] hover:underline">www.digitify.my.id</a>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto px-6 mt-16 pt-10 border-t border-slate-100 text-center flex flex-col items-center gap-4">
            <p class="text-2xl font-bold text-[#0A192F]">
                Powered by B1NG EMPIRE
            </p>
            <div class="flex items-center gap-2">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 40 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle
                        cx="20"
                        cy="20"
                        r="19"
                        stroke="#FF8323"
                        stroke-width="2" />
                    <text
                        x="50%"
                        y="55%"
                        text-anchor="middle"
                        dy=".3em"
                        font-family="Arial"
                        font-weight="bold"
                        font-size="24"
                        fill="#FF8323">
                        D
                    </text>
                </svg>
                <span class="text-lg font-bold text-[#0A192F]">Digitify</span>
            </div>
            <p class="text-gray-500 text-sm mt-4">
                &copy; 2026 Digitify. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // === LOGIKA MODAL INTERAKTIF ===
            const modal = document.getElementById('portfolioModal');
            const modalContent = document.getElementById('modalContent');
            const closeBtn = document.getElementById('closeModal');
            const openBtns = document.querySelectorAll('.open-modal-btn');

            const mTitle = document.getElementById('modalTitle');
            const mCategory = document.getElementById('modalCategory');
            const mImage = document.getElementById('modalImage');
            const mDesc = document.getElementById('modalDescription');
            const mLinkCont = document.getElementById('modalLinkContainer');
            const mLink = document.getElementById('modalLink');

            function openModal() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';

                void modal.offsetWidth; // Paksa render agar animasi terbaca

                modal.classList.replace('opacity-0', 'opacity-100');
                modalContent.classList.remove('scale-95', 'translate-y-10', 'opacity-0');
                modalContent.classList.add('scale-100', 'translate-y-0', 'opacity-100');
            }

            function closeModal() {
                modal.classList.replace('opacity-100', 'opacity-0');
                modalContent.classList.remove('scale-100', 'translate-y-0', 'opacity-100');
                modalContent.classList.add('scale-95', 'translate-y-10', 'opacity-0');

                setTimeout(() => {
                    modal.classList.remove('flex');
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }, 300);
            }

            openBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    mTitle.textContent = this.dataset.title;
                    mCategory.textContent = this.dataset.category;
                    mImage.src = this.dataset.image;
                    mDesc.innerText = this.dataset.desc;

                    // Reset dan timpa class warna kategori di Modal
                    mCategory.className = "inline-block px-3 py-1 border text-xs font-bold rounded-full mb-3 " + this.dataset.color;

                    if (this.dataset.link && this.dataset.link !== '') {
                        mLinkCont.classList.remove('hidden');
                        mLink.href = this.dataset.link;
                    } else {
                        mLinkCont.classList.add('hidden');
                    }

                    openModal();
                });
            });

            closeBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function(e) {
                if (e.target === modal) closeModal();
            });

            // === LOGIKA FILTER SMOOTH ===
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioCards = document.querySelectorAll('.portfolio-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterValue = button.getAttribute('data-filter');

                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-[#0A192F]', 'text-white', 'shadow-md');
                        btn.classList.add('bg-slate-100', 'text-gray-600');
                    });

                    button.classList.remove('bg-slate-100', 'text-gray-600');
                    button.classList.add('bg-[#0A192F]', 'text-white', 'shadow-md');

                    portfolioCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');

                        if (filterValue === 'all' || cardCategory === filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1) translateY(0)';
                            }, 10);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.9) translateY(10px)';
                            setTimeout(() => {
                                if (card.style.opacity === '0') {
                                    card.style.display = 'none';
                                }
                            }, 500);
                        }
                    });
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- 1. SCRIPT ANIMASI MOBILE MENU & HAMBURGER ---
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            let isMenuOpen = false;

            function toggleMenu() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    // Tampilkan Menu
                    mobileMenu.classList.remove('-translate-y-4', 'opacity-0', 'pointer-events-none');
                    mobileMenu.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');

                    // Animasikan Ikon ke X
                    iconMenu.classList.replace('scale-100', 'scale-50');
                    iconMenu.classList.replace('opacity-100', 'opacity-0');
                    iconMenu.classList.add('rotate-90');

                    iconClose.classList.replace('scale-50', 'scale-100');
                    iconClose.classList.replace('opacity-0', 'opacity-100');
                    iconClose.classList.replace('rotate-[-90deg]', 'rotate-0');
                } else {
                    // Sembunyikan Menu
                    mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
                    mobileMenu.classList.add('-translate-y-4', 'opacity-0', 'pointer-events-none');

                    // Animasikan Ikon balik ke Hamburger
                    iconMenu.classList.replace('scale-50', 'scale-100');
                    iconMenu.classList.replace('opacity-0', 'opacity-100');
                    iconMenu.classList.remove('rotate-90');

                    iconClose.classList.replace('scale-100', 'scale-50');
                    iconClose.classList.replace('opacity-100', 'opacity-0');
                    iconClose.classList.replace('rotate-0', 'rotate-[-90deg]');
                }
            }

            mobileBtn.addEventListener('click', toggleMenu);

            // Tutup menu kalau link diklik
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (isMenuOpen) toggleMenu();
                });
            });


            // --- 2. SCRIPT ANIMASI SMOOTH FAQ ACCORDION ---
            const faqButtons = document.querySelectorAll('.faq-btn');

            faqButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.faq-icon');
                    const isOpen = content.style.maxHeight;

                    // (Opsional) Tutup FAQ lain yang sedang terbuka
                    document.querySelectorAll('.faq-content').forEach(el => {
                        if (el !== content) {
                            el.style.maxHeight = null;
                            el.previousElementSibling.querySelector('.faq-icon').classList.remove('rotate-180');
                        }
                    });

                    // Buka/Tutup FAQ yang diklik dengan set maxHeight sesuai isi teksnya
                    if (isOpen) {
                        content.style.maxHeight = null;
                        icon.classList.remove('rotate-180');
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.classList.add('rotate-180');
                    }
                });
            });


            // --- 2. SCRIPT UNTUK ACTIVE NAVBAR SCROLL ---
            // FIX: Tambahkan 'footer' karena Tentang Kami pakai tag footer
            const sections = document.querySelectorAll('section, footer');
            const navLinks = document.querySelectorAll('.nav-link, .mobile-link');

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    // Offset dikurangi sedikit biar pergantian warna lebih pas di layar
                    if (pageYOffset >= sectionTop - 120) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    // Reset semua styling link kembali ke normal
                    link.classList.remove('text-[#FF8323]', 'font-semibold');
                    if (!link.classList.contains('mobile-link')) {
                        link.classList.add('text-gray-700');
                    }

                    // Jika href link cocok dengan id section yang lagi aktif
                    if (link.getAttribute('href').includes(current) && current !== '') {
                        link.classList.remove('text-gray-700');
                        link.classList.add('text-[#FF8323]', 'font-semibold');
                    }
                });
            });

            // --- 3. SCRIPT UNTUK FILTER PORTOFOLIO (Masih pakai yang sama) ---
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioCards = document.querySelectorAll('.portfolio-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterValue = button.getAttribute('data-filter');

                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-[#0A192F]', 'text-white');
                        btn.classList.add('bg-slate-100', 'text-gray-600', 'hover:bg-slate-200');
                    });

                    button.classList.remove('bg-slate-100', 'text-gray-600', 'hover:bg-slate-200');
                    button.classList.add('bg-[#0A192F]', 'text-white');

                    portfolioCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');
                        if (filterValue === 'all' || cardCategory === filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>