@extends('layouts.app')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="bg-slate-50 py-16 min-h-screen font-sans">
        <div class="max-w-5xl mx-auto px-4">

            ```
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Digitify <span class="text-orange-500">Downloader</span>
                </h1>

                <p class="text-slate-600 mt-4 text-lg max-w-2xl mx-auto">
                    Download Reels atau Video Instagram tanpa ribet.
                    Masukkan hingga 5 link sekaligus dan sistem akan memprosesnya secara otomatis.
                </p>
            </div>

            <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                <div class="flex flex-col gap-5">

                    <div class="flex justify-between items-center mb-2">
                        <label class="font-semibold text-slate-700">
                            Daftar Link Instagram
                        </label>

                        <span id="linkCounter"
                            class="text-xs bg-orange-100 text-orange-600 px-3 py-1 rounded-full font-bold">
                            1 / 5 Link
                        </span>
                    </div>

                    <div id="inputsContainer" class="flex flex-col gap-3">
                        <div class="flex gap-2 url-group">
                            <input type="text" placeholder="Paste URL Instagram ke-1..."
                                class="ig-url w-full p-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none">
                        </div>
                    </div>

                    <button type="button" onclick="addInputForm()" id="btnAddLink"
                        class="text-sm font-semibold text-orange-500 hover:text-orange-600 flex items-center gap-2 self-start transition">
                        <i class="fas fa-plus-circle"></i>
                        Tambah Link Lain
                    </button>

                    <div class="h-px w-full bg-slate-200"></div>

                    <select id="format"
                        class="w-full p-4 border border-slate-300 rounded-xl outline-none text-slate-700 focus:ring-2 focus:ring-orange-500">
                        <option value="1">🎬 Video (MP4)</option>
                        <option value="2">🎧 Audio (MP3)</option>
                    </select>

                    <button onclick="processAll()" id="btnProcess"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 rounded-xl transition duration-300 flex justify-center items-center gap-2">
                        <i class="fas fa-rocket"></i>
                        <span id="btnText">Proses Semua Link</span>
                    </button>

                </div>
            </div>

            <div id="resultGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
            </div>

        </div>
    </div>
    ```
@endsection

@push('scripts')
    <script>
        const inputsContainer = document.getElementById('inputsContainer');
        const btnAddLink = document.getElementById('btnAddLink');
        const linkCounter = document.getElementById('linkCounter');
        const resultGrid = document.getElementById('resultGrid');
        const csrfToken = "{{ csrf_token() }}";

        let currentInputs = 1;
        const MAX_INPUTS = 5;

        function addInputForm() {
            if (currentInputs >= MAX_INPUTS) return;

            currentInputs++;

            const div = document.createElement('div');
            div.className = 'flex gap-2 url-group animate-fade-in';

            div.innerHTML = `
            <input type="text"
                placeholder="Paste URL Instagram ke-${currentInputs}..."
                class="ig-url w-full p-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none">

            <button onclick="removeInputForm(this)"
                class="px-4 bg-slate-100 hover:bg-red-50 hover:text-red-500 text-slate-500 rounded-xl transition border border-slate-200">
                <i class="fas fa-trash"></i>
            </button>
        `;

            inputsContainer.appendChild(div);

            updateCounter();
        }

        function removeInputForm(btn) {
            btn.closest('.url-group').remove();
            currentInputs--;
            updateCounter();
        }

        function updateCounter() {
            linkCounter.innerText = `${currentInputs} / ${MAX_INPUTS} Link`;

            btnAddLink.style.display =
                currentInputs >= MAX_INPUTS ?
                'none' :
                'flex';
        }

        async function processAll() {
            const inputs = document.querySelectorAll('.ig-url');
            const format = document.getElementById('format').value;
            const btn = document.getElementById('btnProcess');
            const formatExt = format == '1' ? 'MP4' : 'MP3';

            let validUrls = [];

            inputs.forEach(input => {
                if (input.value.trim() !== '') {
                    validUrls.push(input.value.trim());
                }
            });

            if (validUrls.length === 0) {
                alert("Masukkan minimal 1 URL Instagram!");
                return;
            }

            btn.disabled = true;
            btn.classList.add('opacity-70');

            for (let i = 0; i < validUrls.length; i++) {

                document.getElementById('btnText').innerText =
                    `Memproses (${i + 1}/${validUrls.length})...`;

                await processSingleIg(
                    validUrls[i],
                    format,
                    formatExt,
                    i + 1
                );
            }

            document.getElementById('btnText').innerText =
                "Selesai!";

            btn.disabled = false;
            btn.classList.remove('opacity-70');

            setTimeout(() => {
                document.getElementById('btnText').innerText =
                    "Proses Semua Link";
            }, 3000);
        }

        async function processSingleIg(url, format, formatExt, index) {

            const cardId = 'card-' + Date.now() + '-' + index;

            const cardHTML = `
            <div id="${cardId}"
                class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 text-center">

                <div class="animate-pulse flex flex-col items-center">

                    <div class="h-12 w-12 border-4 border-slate-200 border-t-orange-500 rounded-full animate-spin mb-4"></div>

                    <p class="text-orange-500 font-bold text-sm">
                        Sedang Memproses...
                    </p>

                    <p class="text-slate-500 text-xs mt-1 truncate w-full px-4">
                        ${url}
                    </p>

                </div>
            </div>
        `;

            resultGrid.insertAdjacentHTML('afterbegin', cardHTML);

            const card = document.getElementById(cardId);

            try {

                const response = await fetch("{{ route('ig.process') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        url: url,
                        format: format
                    })
                });

                if (response.ok) {

                    let filename = `download.${formatExt.toLowerCase()}`;

                    const disposition =
                        response.headers.get('Content-Disposition');

                    if (disposition &&
                        disposition.indexOf('attachment') !== -1) {

                        const filenameRegex =
                            /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;

                        const matches =
                            filenameRegex.exec(disposition);

                        if (matches != null && matches[1]) {
                            filename =
                                matches[1].replace(/['"]/g, '');
                        }
                    }

                    const blob = await response.blob();

                    const urlFile =
                        window.URL.createObjectURL(blob);

                    card.innerHTML = `
                    <div class="h-12 w-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-check"></i>
                    </div>

                    <h3 class="text-lg font-black text-slate-800">
                        Berhasil!
                    </h3>

                    <p class="text-xs text-slate-500 mt-1 mb-4 truncate"
                        title="${filename}">
                        ${filename}
                    </p>

                    <a href="${urlFile}"
                        download="${filename}"
                        class="block w-full bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 text-center transition">
                        <i class="fas fa-download mr-1"></i>
                        Download ${formatExt}
                    </a>
                `;

                } else {

                    const errorData =
                        await response.json().catch(() => ({
                            error: 'Terjadi kesalahan sistem.'
                        }));

                    card.innerHTML = `
                    <div class="h-12 w-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-times"></i>
                    </div>

                    <h3 class="text-red-500 font-bold">
                        Gagal Diproses
                    </h3>

                    <p class="text-xs text-slate-500 mt-2">
                        ${errorData.error}
                    </p>
                `;
                }

            } catch (err) {

                card.innerHTML = `
                <div class="h-12 w-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                    <i class="fas fa-times"></i>
                </div>

                <h3 class="text-red-500 font-bold">
                    Koneksi Terputus
                </h3>
            `;
            }
        }
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn .3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush
