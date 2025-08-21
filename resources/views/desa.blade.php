<x-layout>
   <x-slot:title>{{ $nama_desa }}</x-slot:title>
   <!-- Konten Utama -->
   <section class="container mx-auto p-6" x-show="show" x-transition.duration.700ms>
      <!-- Breadcrumb -->
      <nav class="text-sm mb-6">
         <ol class="flex flex-wrap text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Provinsi Jawa Timur</a></li>
            <li class="mx-2">></li>
            <li><a href="#" class="hover:text-blue-600">Banyuwangi</a></li>
            <li class="mx-2">></li>
            <li><a href="#" class="hover:text-blue-600">Kecamatan Ungaran</a></li>
            <li class="mx-2">></li>
            <li class="text-gray-800 font-semibold">Desa Sidomulyo</li>
         </ol>
      </nav>
      <!-- Daftar TPS -->
      <div class="bg-white shadow-lg rounded-2xl p-6">
         <h2 class="text-xl font-semibold mb-4">Daftar TPS di Desa {{ $daftar_tps[0]['id_desa'] }}</h2>
         <ul class="space-y-4">
            <!-- TPS 1 -->
            @foreach ($daftar_tps as $tps)
            <li class="flex items-center justify-between border-b pb-3">
               <div>
                  <p class="font-semibold">{{ $tps['kode'] }}</p>
                  <p class="text-sm text-gray-600">{{ $tps['lokasi_deskripsi'] }}</p>
               </div>
               <a href="/tps-detail.html" 
                  class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform transition duration-200 text-white font-semibold px-4 py-2 rounded-xl shadow">
               Lihat Dokumen
               </a>
            </li>
            @endforeach
         </ul>
      </div>
   </section>
</x-layout>