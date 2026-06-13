@extends('layouts.app')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <div class="bg-slate-50 py-16 min-h-screen font-sans">
        <div class="max-w-5xl mx-auto px-4">

            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    AI Car <span class="text-orange-500">Vision</span>
                </h1>
                <p class="text-slate-600 mt-4 text-lg max-w-2xl mx-auto">
                    Demonstrasi teknologi Machine Learning. Drag & drop foto mobil, AI kami akan menganalisisnya secara
                    real-time.
                </p>
                <p class="text-xs text-slate-400 mt-2 font-medium">
                    SUPPORTED: AUDI, CRETA, INNOVA, SCORPIO, ROLLS-ROYCE, SWIFT, SAFARI
                </p>
            </div>

            <div id="dropzone"
                class="border-2 border-dashed border-orange-300 rounded-2xl p-12 text-center bg-orange-50/50 hover:bg-orange-100 hover:border-orange-500 transition-all duration-300 cursor-pointer relative shadow-sm">
                <input type="file" id="fileInput" multiple accept="image/*"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">

                <svg class="mx-auto h-16 w-16 text-orange-400 mb-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="text-xl font-bold text-slate-800">Klik atau Drag & Drop gambar ke sini</p>
                <p class="text-sm text-slate-500 mt-2">Bisa upload banyak gambar sekaligus untuk diproses AI</p>
            </div>

            <div id="resultGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');
        const resultGrid = document.getElementById('resultGrid');
        const csrfToken = "{{ csrf_token() }}";

        // Visual Feedback pas Dragging
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Ubah warna dropzone saat file di-drag sesuai tema orange
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, () => dropzone.classList.add('border-orange-500', 'bg-orange-100'),
                false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, () => dropzone.classList.remove('border-orange-500',
                'bg-orange-100'), false);
        });

        // Handle File Drop & Select
        dropzone.addEventListener('drop', (e) => handleFiles(e.dataTransfer.files), false);
        fileInput.addEventListener('change', (e) => handleFiles(e.target.files), false);

        function handleFiles(files) {
            [...files].forEach(uploadFile);
        }

        async function uploadFile(file) {
            if (!file.type.startsWith('image/')) return;

            // 1. Bikin Card Loading UI (Tema Terang)
            const cardId = 'card-' + Math.random().toString(36).substr(2, 9);
            const objectUrl = URL.createObjectURL(file);

            const cardHTML = `
                <div id="${cardId}" class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-md flex flex-col hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-52 bg-slate-100">
                        <img src="${objectUrl}" class="w-full h-full object-cover opacity-40" alt="Preview" crossorigin="anonymous">
                        <div class="absolute inset-0 flex items-center justify-center loader-icon">
                            <svg class="animate-spin h-10 w-10 text-orange-500" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-center text-center result-content hidden bg-white">
                        <h3 class="text-2xl font-black text-slate-800 car-label uppercase tracking-wide"></h3>
                        <p class="text-sm font-bold text-orange-500 mt-2 bg-orange-50 py-1 px-3 rounded-full inline-block mx-auto car-conf"></p>
                        
                        <button onclick="downloadCard('${cardId}', this)" class="mt-5 w-full bg-slate-800 hover:bg-orange-500 text-white text-sm font-bold py-2.5 px-4 rounded-xl transition-colors duration-300 flex justify-center items-center gap-2 group">
                            <svg class="w-4 h-4 text-orange-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Simpan Hasil
                        </button>
                    </div>
                </div>
            `;
            resultGrid.insertAdjacentHTML('afterbegin', cardHTML);

            // 2. Siapkan Data
            const formData = new FormData();
            formData.append('image', file);

            // 3. Tembak ke Laravel Endpoint
            try {
                const response = await fetch('/ai-showroom/predict', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });

                const data = await response.json();
                const card = document.getElementById(cardId);

                card.querySelector('.loader-icon').classList.add('hidden');
                card.querySelector('img').classList.remove('opacity-40');

                if (response.ok) {
                    card.querySelector('.result-content').classList.remove('hidden');
                    card.querySelector('.car-label').innerText = data.label;
                    card.querySelector('.car-conf').innerText = `Confidence: ${data.confidence}`;
                } else {
                    card.querySelector('.result-content').classList.remove('hidden');
                    card.querySelector('.car-label').innerText = 'Error';
                    card.querySelector('.car-label').classList.replace('text-slate-800', 'text-red-600');
                    card.querySelector('.car-conf').innerText = data.error || 'Gagal terhubung ke AI';
                    card.querySelector('.car-conf').classList.replace('text-orange-500', 'text-red-500');
                    card.querySelector('.car-conf').classList.replace('bg-orange-50', 'bg-red-50');
                }

            } catch (error) {
                console.error('Error:', error);
            }
        }

        function downloadCard(cardId, btnElement) {
            const card = document.getElementById(cardId);
            const carName = card.querySelector('.car-label').innerText;

            // 1. Sembunyikan tombol download sementara biar nggak ikut ke-foto
            btnElement.classList.add('hidden');

            // 2. Ambil screenshot kotak card-nya (scale 2 biar resolusinya HD)
            html2canvas(card, {
                backgroundColor: '#ffffff',
                scale: 2,
                useCORS: true // Penting agar gambar dari local ter-render
            }).then(canvas => {
                // 3. Ubah jadi file PNG dan download otomatis
                const link = document.createElement('a');
                link.download = `Digitify_AI_Vision_${carName.replace(/\s+/g, '_')}.png`;
                link.href = canvas.toDataURL('image/png');
                link.click();

                // 4. Munculin lagi tombolnya setelah selesai didownload
                btnElement.classList.remove('hidden');
            });
        }
    </script>
@endpush
