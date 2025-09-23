<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View PDF dengan Flowbite</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 p-6">

    <h2 class="text-xl font-bold mb-4">Halaman View PDF</h2>

    <!-- Tombol -->
    <button data-modal-target="pdfModal" data-modal-toggle="pdfModal"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Lihat PDF
    </button>

    <!-- Modal -->
    <div id="pdfModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full bg-black/50">
        <div class="relative w-full max-w-5xl h-[80%]">
            <!-- Konten modal -->
            <div class="relative bg-white rounded-lg shadow flex flex-col h-full">
                <!-- Header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t bg-blue-600 text-white">
                    <h3 class="text-lg font-semibold">
                        📄 Dokumen C Hasil
                    </h3>
                    <button type="button" class="text-white hover:text-gray-200"
                        data-modal-hide="pdfModal">
                        ✕
                    </button>
                </div>
                <!-- Body -->
                <div class="flex-1">
                    <iframe src="{{ asset('storage\app\private\dokumen\CV_AKHMAD FANNY FADHILLA 2.pdf') }}" class="w-full h-full rounded-b-lg"></iframe>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
