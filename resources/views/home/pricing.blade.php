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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-6 lg:gap-8 items-stretch">
                @foreach ($packages as $package)
                @php
                // Logika Styling Kartu
                $cardClass = match($package->theme) {
                'highlight' => 'bg-white rounded-3xl p-8 shadow-2xl border-2 border-[#FF8323] flex flex-col relative z-20 transform md:-translate-y-4',
                'dark' => 'bg-[#0A192F] text-white rounded-3xl p-8 shadow-2xl flex flex-col relative overflow-hidden',
                default => 'bg-white rounded-3xl p-8 shadow-md border border-gray-200 flex flex-col hover:border-[#FF8323]/30 hover:shadow-xl transition duration-300 relative'
                };

                // Logika Warna Icon & Badge
                $checkIconColor = match($package->theme) {
                'highlight' => 'text-[#FF8323]',
                'dark' => 'text-amber-400',
                default => 'text-indigo-500' // Sesuai gambar baru pakai warna ungu/biru
                };

                $btnClass = match($package->theme) {
                'highlight' => 'bg-[#FF8323] text-white hover:bg-[#e6731f] shadow-lg hover:shadow-xl',
                'dark' => 'bg-white text-[#0A192F] hover:bg-gray-100',
                default => ($package->badge === 'PAKET LOKAL'
                ? 'border-2 border-[#0A192F] text-[#0A192F] hover:bg-[#0A192F] hover:text-white'
                : 'bg-slate-100 text-gray-700 hover:bg-slate-200')
                };
                @endphp

                <div class="{{ $cardClass }}">

                    {{-- LOGIKA BADGE --}}
                    @if($package->badge)
                    @if($package->theme === 'dark')
                    {{-- Badge Premium (Kanan Atas) --}}
                    <div class="absolute top-6 right-0 bg-gradient-to-r from-[#FF8323] to-amber-500 text-white text-[10px] font-bold px-4 py-1 uppercase tracking-widest rounded-l-full shadow-lg">
                        {{ $package->badge }}
                    </div>
                    @elseif($package->theme === 'highlight')
                    {{-- Badge Best Seller (Tengah Melayang) --}}
                    <div class="absolute top-0 inset-x-0 flex justify-center transform -translate-y-1/2">
                        <span class="bg-[#FF8323] text-white px-4 py-1.5 rounded-full text-sm font-bold tracking-wider shadow-lg flex items-center gap-1">
                            {{ $package->badge }}
                        </span>
                    </div>
                    @else
                    {{-- Badge Paket Lokal (Tengah Dalam) --}}
                    <div class="absolute -top-3 inset-x-0 flex justify-center">
                        <span class="bg-blue-100 text-blue-700 border border-blue-200 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider">
                            {{ $package->badge }}
                        </span>
                    </div>
                    @endif
                    @endif

                    <h3 class="font-bold text-lg mb-1 {{ $package->theme === 'dark' ? 'text-white' : 'text-gray-800' }} {{ $package->theme === 'highlight' ? 'mt-3' : '' }}">
                        {{ $package->name }}
                    </h3>
                    <p class="text-xs mb-4 {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                        {{ $package->subtitle }}
                    </p>

                    <div>
                        <p class="text-sm font-medium mb-1 {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                            {{ $package->is_start_from ? 'Mulai dari' : 'Hanya' }}
                        </p>
                        <p class="text-3xl font-extrabold mb-6 {{ $package->theme === 'dark' ? 'text-white' : 'text-[#0A192F]' }}">
                            <sup class="text-xl font-bold top-[-0.8em] {{ $package->theme === 'dark' ? 'text-gray-300' : '' }}">Rp</sup>{!! $package->price !!}
                        </p>
                    </div>

                    <ul class="space-y-3 flex-grow mb-6 text-sm {{ $package->theme === 'dark' ? 'text-gray-300' : 'text-gray-600' }}">
                        @foreach ($package->features as $feature)
                        <li class="flex items-start gap-2">
                            <span class="{{ $checkIconColor }} font-bold">✔</span>
                            {{ $feature }}
                        </li>
                        @endforeach

                        @if($package->bonus_text)
                        <li class="flex items-start gap-2 p-1.5 rounded-md border {{ $package->theme === 'highlight' ? 'bg-orange-50 border-orange-100' : 'bg-blue-50 border-blue-100' }}">
                            <span class="text-orange-600 font-bold">🎉</span>
                            <span class="font-bold {{ $package->theme === 'highlight' ? 'text-orange-800' : 'text-blue-800' }}">
                                {{ $package->bonus_text }}
                            </span>
                        </li>
                        @endif

                        @if($package->excluded_features)
                        @foreach ($package->excluded_features as $ex_feature)
                        <li class="flex items-start gap-2 opacity-50">
                            <span class="text-red-400 font-bold">❌</span>
                            {{ $ex_feature }}
                        </li>
                        @endforeach
                        @endif
                    </ul>

                    @if($package->renewal_text)
                    <div class="border-t pt-4 mb-6 {{ $package->theme === 'dark' ? 'border-slate-700' : 'border-gray-100' }}">
                        <p class="text-[10px] leading-tight {{ $package->theme === 'dark' ? 'text-gray-400' : 'text-gray-500' }}">
                            <span class="font-bold {{ $package->theme === 'dark' ? 'text-white' : 'text-[#0A192F]' }}">Perpanjangan:</span>
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