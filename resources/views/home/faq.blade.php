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