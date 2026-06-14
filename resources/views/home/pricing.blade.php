@php
    /*
    |--------------------------------------------------------------------------
    | CONFIG KATEGORI — Untuk styling frontend & urutan tombol filter
    |--------------------------------------------------------------------------
    */
    $categoryConfig = [
        'edukasi' => [
            'label' => 'Edukasi',
            'icon' => 'academic-cap',
            'bg' => '#EFF6FF',
            'text' => '#1D4ED8',
            'border' => '#BFDBFE',
        ],
        'event' => [
            'label' => 'Event',
            'icon' => 'sparkles',
            'bg' => '#F5F3FF',
            'text' => '#6D28D9',
            'border' => '#DDD6FE',
        ],
        'fnb' => ['label' => 'F&B', 'icon' => 'cake', 'bg' => '#ECFDF5', 'text' => '#065F46', 'border' => '#A7F3D0'],
        'retail' => [
            'label' => 'Retail & UMKM',
            'icon' => 'shopping-bag',
            'bg' => '#ECFDF5',
            'text' => '#065F46',
            'border' => '#A7F3D0',
        ],
        'properti' => [
            'label' => 'Properti',
            'icon' => 'building-office',
            'bg' => '#EEF2FF',
            'text' => '#3730A3',
            'border' => '#C7D2FE',
        ],
        'services' => [
            'label' => 'Services',
            'icon' => 'wrench',
            'bg' => '#FFFBEB',
            'text' => '#92400E',
            'border' => '#FDE68A',
        ],
    ];

    // Ambil kategori yang memiliki data dari database koleksi paket Anda
    $activeCategories = $toThePointPackages->pluck('category')->unique()->filter()->values();
    $waNumber = '6281226110988';
@endphp

<section id="harga" class="py-20 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span
                class="inline-flex items-center gap-2 px-4 py-1.5 bg-green-100 text-green-700 font-bold rounded-full text-sm mb-4 border border-green-200">
                <span class="relative flex h-2.5 w-2.5">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-6 lg:gap-8 items-stretch">
            @foreach ($packages as $package)
                @php
                    // Logika Styling Kartu
                    $cardClass = match ($package->theme) {
                        'highlight'
                            => 'bg-white rounded-3xl p-8 shadow-2xl border-2 border-[#FF8323] flex flex-col relative z-20 transform md:-translate-y-4',
                        'dark'
                            => 'bg-[#0A192F] text-white rounded-3xl p-8 shadow-2xl flex flex-col relative overflow-hidden',
                        default
                            => 'bg-white rounded-3xl p-8 shadow-md border border-gray-200 flex flex-col hover:border-[#FF8323]/30 hover:shadow-xl transition duration-300 relative',
                    };

                    // Logika Warna Icon & Badge
                    $checkIconColor = match ($package->theme) {
                        'highlight' => 'text-[#FF8323]',
                        'dark' => 'text-amber-400',
                        default => 'text-indigo-500', // Sesuai gambar baru pakai warna ungu/biru
                    };

                    $btnClass = match ($package->theme) {
                        'highlight' => 'bg-[#FF8323] text-white hover:bg-[#e6731f] shadow-lg hover:shadow-xl',
                        'dark' => 'bg-white text-[#0A192F] hover:bg-gray-100',
                        default => $package->badge === 'PAKET LOKAL'
                            ? 'border-2 border-[#0A192F] text-[#0A192F] hover:bg-[#0A192F] hover:text-white'
                            : 'bg-slate-100 text-gray-700 hover:bg-slate-200',
                    };
                @endphp

                <div class="{{ $cardClass }}">

                    {{-- LOGIKA BADGE --}}
                    @if ($package->badge)
                        @if ($package->theme === 'dark')
                            {{-- Badge Premium (Kanan Atas) --}}
                            <div
                                class="absolute top-6 right-0 bg-gradient-to-r from-[#FF8323] to-amber-500 text-white text-[10px] font-bold px-4 py-1 uppercase tracking-widest rounded-l-full shadow-lg">
                                {{ $package->badge }}
                            </div>
                        @elseif($package->theme === 'highlight')
                            {{-- Badge Best Seller (Tengah Melayang) --}}
                            <div class="absolute top-0 inset-x-0 flex justify-center transform -translate-y-1/2">
                                <span
                                    class="bg-[#FF8323] text-white px-4 py-1.5 rounded-full text-sm font-bold tracking-wider shadow-lg flex items-center gap-1">
                                    {{ $package->badge }}
                                </span>
                            </div>
                        @else
                            {{-- Badge Paket Lokal (Tengah Dalam) --}}
                            <div class="absolute -top-3 inset-x-0 flex justify-center">
                                <span
                                    class="bg-blue-100 text-blue-700 border border-blue-200 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider">
                                    {{ $package->badge }}
                                </span>
                            </div>
                        @endif
                    @endif

                    <h3
                        class="font-bold text-lg mb-1 {{ $package->theme === 'dark' ? 'text-white' : 'text-gray-800' }} {{ $package->theme === 'highlight' ? 'mt-3' : '' }}">
                        {{ $package->name }}
                    </h3>
                    <p class="text-xs mb-4 {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                        {{ $package->subtitle }}
                    </p>

                    <div>
                        <p
                            class="text-sm font-medium mb-1 {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                            {{ $package->is_start_from ? 'Mulai dari' : 'Hanya' }}
                        </p>
                        <p
                            class="text-3xl font-extrabold mb-6 {{ $package->theme === 'dark' ? 'text-white' : 'text-[#0A192F]' }}">
                            <sup
                                class="text-xl font-bold top-[-0.8em] {{ $package->theme === 'dark' ? 'text-gray-300' : '' }}">Rp</sup>{!! $package->price !!}
                        </p>
                    </div>

                    <ul
                        class="space-y-3 flex-grow mb-6 text-sm {{ $package->theme === 'dark' ? 'text-gray-300' : 'text-gray-600' }}">
                        @foreach ($package->features as $feature)
                            <li class="flex items-start gap-2">
                                <span class="{{ $checkIconColor }} font-bold">✔</span>
                                {{ $feature }}
                            </li>
                        @endforeach

                        @if ($package->bonus_text)
                            <li
                                class="flex items-start gap-2 p-1.5 rounded-md border {{ $package->theme === 'highlight' ? 'bg-orange-50 border-orange-100' : 'bg-blue-50 border-blue-100' }}">
                                <span class="text-orange-600 font-bold">🎉</span>
                                <span
                                    class="font-bold {{ $package->theme === 'highlight' ? 'text-orange-800' : 'text-blue-800' }}">
                                    {{ $package->bonus_text }}
                                </span>
                            </li>
                        @endif

                        @if ($package->excluded_features)
                            @foreach ($package->excluded_features as $ex_feature)
                                <li class="flex items-start gap-2 opacity-50">
                                    <span class="text-red-400 font-bold">❌</span>
                                    {{ $ex_feature }}
                                </li>
                            @endforeach
                        @endif
                    </ul>

                    @if ($package->renewal_text)
                        <div
                            class="border-t pt-4 mb-6 {{ $package->theme === 'dark' ? 'border-slate-700' : 'border-gray-100' }}">
                            <p
                                class="text-[10px] leading-tight {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                                <span
                                    class="font-bold {{ $package->theme === 'dark' ? 'text-white' : 'text-[#0A192F]' }}">Perpanjangan:</span>
                                {{ $package->renewal_text }}
                            </p>
                        </div>
                    @endif

                    <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Digitify! Saya tertarik dengan paket ' . $package->name) }}"
                        target="_blank"
                        class="block w-full text-center py-3 rounded-xl font-bold transition mt-auto {{ $btnClass }}">
                        {{ $package->theme === 'dark' ? 'Konsultasi Khusus' : 'Pilih Paket' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== HTML SECTION ===================== --}}
<section id="paket-to-the-point" class="ttp-section">
    <div class="ttp-container">

        {{-- Header --}}
        <div class="ttp-header">
            <span class="ttp-eyebrow">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                </svg>
                Instan &amp; Langsung Solusi
            </span>
            <h2 class="ttp-title">Paket <span class="ttp-title-accent">To-The-Point</span></h2>
            <p class="ttp-desc">
                Layanan digital praktis tanpa ribet istilah teknis. Pilih paketnya, terima beres, dan langsung online.
            </p>
        </div>

        {{-- Filter Bar --}}
        <div class="ttp-filter-wrap" role="group" aria-label="Filter kategori paket">
            <button class="ttp-filter-btn ttp-filter-btn--active" data-ttp-filter="all" aria-pressed="true">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <rect x="3" y="3" width="7" height="7" rx="1" />
                    <rect x="14" y="3" width="7" height="7" rx="1" />
                    <rect x="3" y="14" width="7" height="7" rx="1" />
                    <rect x="14" y="14" width="7" height="7" rx="1" />
                </svg>
                Semua Paket
                <span class="ttp-filter-count" id="count-all">{{ $toThePointPackages->count() }}</span>
            </button>

            @foreach ($categoryConfig as $catKey => $catMeta)
                @if ($activeCategories->contains($catKey))
                    @php $catCount = $toThePointPackages->where('category', $catKey)->count(); @endphp
                    <button class="ttp-filter-btn" data-ttp-filter="{{ $catKey }}" aria-pressed="false">
                        @switch($catMeta['icon'])
                            @case('academic-cap')
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                    <path d="M2 17l10 5 10-5" />
                                    <path d="M2 12l10 5 10-5" />
                                </svg>
                            @break

                            @case('sparkles')
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path
                                        d="M12 3v1m0 16v1M4.22 4.22l.7.7m12.16 12.16.7.7M3 12H2m20 0h-1M4.22 19.78l.7-.7M18.36 5.64l.7-.7" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg>
                            @break

                            @case('cake')
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path d="M20 21v-8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8" />
                                    <path d="M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1" />
                                    <path d="M2 21h20" />
                                    <path d="M7 8v3" />
                                    <path d="M12 8v3" />
                                    <path d="M17 8v3" />
                                    <path d="M7 4h.01" />
                                    <path d="M12 4h.01" />
                                    <path d="M17 4h.01" />
                                </svg>
                            @break

                            @case('shopping-bag')
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            @break

                            @case('building-office')
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <rect x="3" y="3" width="18" height="18" rx="2" />
                                    <path d="M9 3v18" />
                                    <path d="M3 9h6" />
                                    <path d="M3 15h6" />
                                    <path d="M12 7h6" />
                                    <path d="M12 12h6" />
                                    <path d="M12 17h6" />
                                </svg>
                            @break

                            @default
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                </svg>
                        @endswitch
                        {{ $catMeta['label'] }}
                        <span class="ttp-filter-count" id="count-{{ $catKey }}">{{ $catCount }}</span>
                    </button>
                @endif
            @endforeach
        </div>

        {{-- Results info --}}
        <p class="ttp-results-info" id="ttp-results-info">
            Menampilkan semua {{ $toThePointPackages->count() }} paket
        </p>

        {{-- Card Grid --}}
        <div class="ttp-grid" id="ttp-grid">
            @foreach ($toThePointPackages as $pkg)
                @php
                    $cfg = $categoryConfig[$pkg->category] ?? [
                        'bg' => '#F1F5F9',
                        'text' => '#334155',
                        'border' => '#CBD5E1',
                    ];
                    $waText = urlencode('Halo Digitify! Saya tertarik dengan paket ' . $pkg->title);
                    $waHref = "https://wa.me/{$waNumber}?text={$waText}";
                @endphp

                <a href="{{ $waHref }}" target="_blank" rel="noopener noreferrer" class="ttp-card"
                    data-ttp-category="{{ $pkg->category }}">
                    <span class="ttp-badge"
                        style="background:{{ $cfg['bg'] }};color:{{ $cfg['text'] }};border-color:{{ $cfg['border'] }};">
                        {{ $pkg->badge_label }}
                    </span>
                    <h3 class="ttp-card-title">{{ $pkg->title }}</h3>
                    <p class="ttp-card-price">{{ $pkg->price }}</p>
                    <hr class="ttp-card-divider">
                    <p class="ttp-card-desc">{{ $pkg->description }}</p>
                    <span class="ttp-card-cta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12c0 2.115.554 4.1 1.523 5.824L.057 23.3a.75.75 0 0 0 .923.923l5.476-1.466A11.95 11.95 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.9 0-3.68-.497-5.22-1.367l-.374-.217-3.882 1.04 1.04-3.882-.217-.374A9.955 9.955 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                        </svg>
                        Chat via WhatsApp
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            @endforeach

            <div class="ttp-empty" id="ttp-empty" hidden>
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.35-4.35" />
                    <path d="M8 11h6" />
                </svg>
                <p>Belum ada paket di kategori ini.</p>
            </div>
        </div>
        {{-- 2. BANNER SOLUSI CUSTOM (Berdiri sendiri di luar Grid, selalu tampil) --}}
        <div class="w-full mt-10 md:mt-12">
            <div
                class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-12 text-center w-full shadow-sm flex flex-col items-center relative overflow-hidden">

                {{-- Dekorasi Background --}}
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-[#FF8323] rounded-full mix-blend-multiply filter blur-[80px] opacity-10 translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-[#0A192F] rounded-full mix-blend-multiply filter blur-[80px] opacity-5 -translate-x-1/2 translate-y-1/2">
                </div>

                {{-- Teks --}}
                <h3 class="text-2xl md:text-3xl font-extrabold text-[#0A192F] mb-3 relative z-10">
                    Belum Menemukan Paket yang <span class="text-[#FF8323]">Sesuai?</span>
                </h3>
                <p
                    class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto mb-8 leading-relaxed font-medium relative z-10">
                    Setiap kebutuhan punya keunikannya sendiri. Jika dari daftar di atas belum ada yang pas dengan
                    kebutuhanmu, jangan khawatir. Ceritakan kebutuhan spesifikmu, dan kami akan merancangkan <span
                        class="text-[#0A192F] font-bold">website custom</span> khusus untukmu.
                </p>

                {{-- Tombol CTA --}}
                <a href="https://wa.me/{{ $waNumber }}?text={{ urlencode('Halo Digitify! Saya sudah lihat daftar paket Website Terima Beres dan To-The-Point, tapi sepertinya saya butuh fitur yang lebih custom untuk bisnis saya. Boleh kita diskusi?') }}"
                    target="_blank"
                    class="relative z-10 inline-flex items-center gap-2.5 px-8 py-3.5 bg-[#0A192F] hover:bg-[#FF8323] text-white text-sm font-bold rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 group">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12c0 2.115.554 4.1 1.523 5.824L.057 23.3a.75.75 0 00.923.923l5.476-1.466A11.95 11.95 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.9 0-3.68-.497-5.22-1.367l-.374-.217-3.882 1.04 1.04-3.882-.217-.374A9.955 9.955 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                    </svg>
                    Konsultasi Custom Web
                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===================== CSS STYLES ===================== --}}
<style>
    .ttp-section {
        padding: 5rem 1.5rem;
        background: #ffffff;
        border-top: 1px solid #F1F5F9;
    }

    .ttp-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .ttp-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .ttp-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #FFF4EC;
        color: #c45e00;
        border: 1px solid #FFD4B0;
        border-radius: 100px;
        padding: 5px 14px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .ttp-title {
        font-size: clamp(1.75rem, 4vw, 2.25rem);
        font-weight: 800;
        color: #0A192F;
        line-height: 1.2;
        margin-bottom: 0.75rem;
    }

    .ttp-title-accent {
        color: #FF8323;
    }

    .ttp-desc {
        font-size: 0.95rem;
        color: #64748B;
        line-height: 1.65;
        max-width: 540px;
        margin: 0 auto;
    }

    .ttp-filter-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
        margin-bottom: 1.25rem;
    }

    .ttp-filter-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 100px;
        border: 1.5px solid #E2E8F0;
        background: #ffffff;
        color: #475569;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.15s;
        line-height: 1;
        font-family: inherit;
    }

    .ttp-filter-btn:hover {
        border-color: #FF8323;
        color: #c45e00;
        background: #FFF4EC;
    }

    .ttp-filter-btn--active,
    .ttp-filter-btn[aria-pressed="true"] {
        background: #0A192F !important;
        border-color: #0A192F !important;
        color: #ffffff !important;
        box-shadow: 0 2px 8px rgba(10, 25, 47, 0.18);
    }

    .ttp-filter-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 18px;
        padding: 0 5px;
        background: rgba(0, 0, 0, 0.08);
        border-radius: 100px;
        font-size: 10px;
        font-weight: 700;
        line-height: 1;
    }

    .ttp-filter-btn--active .ttp-filter-count,
    .ttp-filter-btn[aria-pressed="true"] .ttp-filter-count {
        background: rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.9);
    }

    .ttp-results-info {
        text-align: center;
        font-size: 12.5px;
        color: #94A3B8;
        margin-bottom: 1.5rem;
        min-height: 18px;
    }

    .ttp-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
        gap: 1rem;
        align-items: start;
    }

    .ttp-card {
        display: flex;
        flex-direction: column;
        background: #ffffff;
        border: 1.5px solid #E2E8F0;
        border-radius: 18px;
        padding: 1.25rem 1.25rem 1rem;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.18s;
        position: relative;
        overflow: hidden;
    }

    .ttp-card:hover {
        border-color: #FF8323;
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(255, 131, 35, 0.12);
    }

    .ttp-card[hidden] {
        display: none !important;
    }

    .ttp-badge {
        display: inline-block;
        font-size: 10.5px;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 100px;
        border: 1px solid transparent;
        margin-bottom: 0.75rem;
        width: fit-content;
    }

    .ttp-card-title {
        font-size: 15px;
        font-weight: 700;
        color: #0F172A;
        line-height: 1.35;
        margin-bottom: 0.35rem;
        transition: color 0.15s;
    }

    .ttp-card:hover .ttp-card-title {
        color: #FF8323;
    }

    .ttp-card-price {
        font-size: 13px;
        font-weight: 700;
        color: #1A6FBF;
        margin-bottom: 0.6rem;
    }

    .ttp-card-divider {
        border: none;
        border-top: 1px solid #F1F5F9;
        margin: 0 0 0.65rem;
    }

    .ttp-card-desc {
        font-size: 12.5px;
        color: #64748B;
        line-height: 1.6;
    }

    .ttp-card-cta {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11.5px;
        font-weight: 700;
        color: #FF8323;
        margin-top: 0.85rem;
        opacity: 0;
        transform: translateY(4px);
        transition: all 0.15s;
    }

    .ttp-card:hover .ttp-card-cta {
        opacity: 1;
        transform: translateY(0);
    }

    .ttp-empty {
        grid-column: 1 / -1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        padding: 4rem 1rem;
        color: #94A3B8;
        font-size: 14px;
    }

    @keyframes ttp-fadein {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .ttp-card-enter {
        animation: ttp-fadein 0.22s ease forwards;
    }

    @media (max-width: 640px) {
        .ttp-section {
            padding: 3rem 1rem;
        }

        .ttp-filter-wrap {
            gap: 6px;
        }

        .ttp-filter-btn {
            font-size: 12px;
            padding: 7px 12px;
        }

        .ttp-grid {
            grid-template-columns: 1fr;
        }

        .ttp-card-cta {
            opacity: 1;
            transform: none;
        }
    }
</style>

{{-- ===================== JAVASCRIPT ===================== --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        'use strict';

        var CATEGORY_LABELS = @json(collect($categoryConfig)->map(fn($c) => $c['label']));
        var TOTAL = {{ $toThePointPackages->count() }};
        var activeFilter = 'all';

        var cards = Array.from(document.querySelectorAll('.ttp-card'));
        var filterBtns = Array.from(document.querySelectorAll('.ttp-filter-btn'));
        var resultsInfo = document.getElementById('ttp-results-info');
        var emptyState = document.getElementById('ttp-empty');

        function applyFilter(cat) {
            activeFilter = cat;
            var visibleCount = 0;

            cards.forEach(function(card) {
                var cardCat = card.getAttribute('data-ttp-category');
                var isMatch = (cat === 'all' || cardCat === cat);

                if (isMatch) {
                    card.removeAttribute('hidden');
                    card.classList.remove('ttp-card-enter');
                    // Trigger reflow untuk animasi
                    void card.offsetWidth;
                    card.classList.add('ttp-card-enter');
                    visibleCount++;
                } else {
                    card.setAttribute('hidden', 'true');
                }
            });

            // LOGIKA PERBAIKAN EMPTY STATE
            if (visibleCount === 0) {
                emptyState.removeAttribute('hidden');
                emptyState.style.display = 'flex'; // Paksa tampil
            } else {
                emptyState.setAttribute('hidden', 'true');
                emptyState.style.display = 'none'; // Paksa sembunyi
            }

            // Update teks info hasil
            if (cat === 'all') {
                resultsInfo.textContent = 'Menampilkan semua ' + TOTAL + ' paket';
            } else {
                var label = CATEGORY_LABELS[cat] || cat;
                resultsInfo.textContent = visibleCount + ' paket dalam kategori "' + label + '"';
            }
        }

        // Jalankan event listener untuk setiap tombol
        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah scroll tiba-tiba

                var cat = btn.getAttribute('data-ttp-filter');
                if (cat === activeFilter) return;

                // Reset semua tombol
                filterBtns.forEach(function(b) {
                    b.setAttribute('aria-pressed', 'false');
                    b.classList.remove('ttp-filter-btn--active');
                });

                // Set tombol yang diklik jadi aktif
                btn.setAttribute('aria-pressed', 'true');
                btn.classList.add('ttp-filter-btn--active');

                applyFilter(cat);
            });
        });

        // Inisialisasi awal saat halaman dimuat (pastikan empty state sembunyi jika ada data)
        applyFilter('all');
    });
</script>
