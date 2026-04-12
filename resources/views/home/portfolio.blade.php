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