<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Detail Desa' }}</title>
    <!-- Use Tailwind CSS for styling -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <style>
        @import url('[https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap)');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    @if($desa)
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-xl">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $desa->nama_desa }}</h1>
                <p class="text-gray-500">Detail Informasi Desa</p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-700">Kode Desa</h3>
                    <p class="text-gray-600">{{ $desa->id_desa }}</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-700">ID Kecamatan</h3>
                    <p class="text-gray-600">{{ $desa->id_kecamatan }}</p>
                </div>
                
                <!-- You can add more details here based on your database table -->
                <!-- For example: -->
                <!--
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-700">Jumlah Penduduk</h3>
                    <p class="text-gray-600">{{ $desa->jumlah_penduduk }}</p>
                </div>
                -->
            </div>

            <div class="mt-8 text-center">
                <a href="/" class="inline-block bg-blue-600 text-white font-medium py-2 px-6 rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    @else
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-lg text-center">
            <h1 class="text-2xl font-bold text-red-500 mb-4">Desa tidak ditemukan.</h1>
            <p class="text-gray-600">Data yang Anda cari tidak tersedia.</p>
        </div>
    @endif

</body>
</html>
