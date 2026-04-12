<!doctype html>
<html lang="id" class="scroll-smooth scroll-pt-16">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Jasa Pembuatan Website Purwokerto | Digitify Web Development')</title>
    <meta name="title" content="Jasa Pembuatan Website Purwokerto - Digitify UMKM" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='19' stroke='%23FF8323' stroke-width='2' /%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' dy='.3em' font-family='Arial' font-weight='bold' font-size='24' fill='%23FF8323'%3ED%3C/text%3E%3C/svg%3E">
    <meta name="description" content="Jasa pembuatan website di Purwokerto untuk UMKM & bisnis lokal. Dari landing page hingga sistem e-commerce, siap online cepat & profesional." />
    <meta name="keywords" content="jasa website purwokerto, bikin web murah purwokerto, buat website umkm, jasa landing page, web developer banyumas, digitify, naufal fathi" />
    <meta name="author" content="Naufal Fathi - Digitify" />
    <meta name="robots" content="index, follow" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="Jasa Pembuatan Website Purwokerto - Digitify" />
    <meta property="og:description" content="Solusi pembuatan website murah dan profesional untuk UMKM di Purwokerto. Harga mulai Rp300rb terima beres!" />
    <meta property="og:image" content="{{ asset('logo.png') }}" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}" />
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

    @stack('styles')
</head>

<body class="bg-slate-50 text-gray-900 font-sans">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('modals')

    @stack('scripts')
</body>

</html>