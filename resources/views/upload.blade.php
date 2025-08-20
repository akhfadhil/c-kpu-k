

<x-layout>

   <x-slot:title>{{ $title }}</x-slot:title>
  <!-- Konten Utama -->
  <section class="container mx-auto p-6" x-show="show" x-transition.duration.700ms>
    
    <!-- Breadcrumb -->
    <nav class="text-sm mb-6">
      <ol class="flex flex-wrap text-gray-600">
        <li><a href="/" class="hover:text-blue-600">Provinsi Jawa Tengah</a></li>
        <li class="mx-2">></li>
        <li><a href="#" class="hover:text-blue-600">Kabupaten Semarang</a></li>
        <li class="mx-2">></li>
        <li><a href="#" class="hover:text-blue-600">Kecamatan Ungaran</a></li>
        <li class="mx-2">></li>
        <li class="text-gray-800 font-semibold">Desa Sidomulyo</li>
      </ol>
    </nav>

    <!-- Daftar TPS -->
    <div class="bg-white shadow-lg rounded-2xl p-6">
      <h2 class="text-xl font-semibold mb-4">Daftar TPS di Desa Sidomulyo</h2>
      <ul class="space-y-4">
        
        <!-- TPS 1 -->
        <li class="flex items-center justify-between border-b pb-3">
          <div>
            <p class="font-semibold">TPS 1</p>
            <p class="text-sm text-gray-600">Jl. Melati No. 12, Sidomulyo</p>
          </div>
          <a href="/tps-detail.html" 
             class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform transition duration-200 text-white font-semibold px-4 py-2 rounded-xl shadow">
            Lihat Dokumen
          </a>
        </li>

        <!-- TPS 2 -->
        <li class="flex items-center justify-between border-b pb-3">
          <div>
            <p class="font-semibold">TPS 2</p>
            <p class="text-sm text-gray-600">Jl. Kenanga No. 5, Sidomulyo</p>
          </div>
          <a href="/tps-detail.html" 
             class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform transition duration-200 text-white font-semibold px-4 py-2 rounded-xl shadow">
            Lihat Dokumen
          </a>
        </li>

        <!-- TPS 3 -->
        <li class="flex items-center justify-between border-b pb-3">
          <div>
            <p class="font-semibold">TPS 3</p>
            <p class="text-sm text-gray-600">Jl. Mawar No. 8, Sidomulyo</p>
          </div>
          <a href="/tps-detail.html" 
             class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform transition duration-200 text-white font-semibold px-4 py-2 rounded-xl shadow">
            Lihat Dokumen
          </a>
        </li>

      </ul>
    </div>
  </section>

</x-layout>