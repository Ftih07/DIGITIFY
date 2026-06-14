    <header class="bg-white sticky top-0 z-50 shadow-sm relative">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between bg-white relative z-50">
            <div class="flex items-center gap-2">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="19" stroke="#FF8323" stroke-width="2" />
                    <text x="50%" y="55%" text-anchor="middle" dy=".3em" font-family="Arial" font-weight="bold"
                        font-size="24" fill="#FF8323">D</text>
                </svg>
                <span class="text-2xl font-bold text-[#0A192F]">Digitify</span>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}#home"
                    class="nav-link text-gray-700 hover:text-[#FF8323] transition">Home</a>
                <a href="{{ route('home') }}#harga"
                    class="nav-link text-gray-700 hover:text-[#FF8323] transition">Harga</a>
                <a href="{{ route('home') }}#portofolio"
                    class="nav-link text-gray-700 hover:text-[#FF8323] transition">Portofolio</a>
                <a href="{{ route('home') }}#faq" class="nav-link text-gray-700 hover:text-[#FF8323] transition">FAQ</a>
                <a href="{{ route('home') }}#tentang-saya"
                    class="nav-link text-gray-700 hover:text-[#FF8323] transition">Tentang Kami</a>

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

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="hidden md:block bg-[#FF8323] text-white px-6 py-2.5 rounded-full font-semibold hover:bg-[#e6731f] transition duration-200">
                    KONSULTASI PROYEK
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu"
            class="absolute w-full left-0 top-full bg-white shadow-xl border-t border-gray-100 transform -translate-y-4 opacity-0 pointer-events-none transition-all duration-300 ease-in-out z-40">
            <div class="flex flex-col px-6 pb-6 pt-4 gap-4">
                <a href="{{ route('home') }}#home" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Home</a>
                <a href="{{ route('home') }}#harga" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Harga</a>
                <a href="{{ route('home') }}#portofolio" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Portofolio</a>
                <a href="{{ route('home') }}#faq" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">FAQ</a>
                <a href="{{ route('home') }}#tentang-saya" class="mobile-link text-gray-700 font-medium hover:text-[#FF8323]">Tentang
                    Kami</a>

                <a href="{{ route('game-services.index') }}"
                    class="mobile-link text-[#0A192F] bg-slate-50 border border-slate-100 p-3 rounded-lg font-bold hover:text-[#FF8323] flex items-center gap-2 mt-2">
                    <svg class="w-4 h-4 text-[#FF8323] group-hover:animate-pulse" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Layanan Joki Game
                </a>

                <a href="https://wa.me/6281226110988?text={{ urlencode('Halo Naufal / Digitify! Saya ingin konsultasi mengenai digitalisasi bisnis dan pembuatan website. Boleh dibantu infonya?') }}"
                    target="_blank"
                    class="bg-[#FF8323] text-white text-center py-3 rounded-xl font-bold mt-2 shadow-md">
                    KONSULTASI PROYEK
                </a>
            </div>
        </div>
    </header>
