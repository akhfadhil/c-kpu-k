

<x-layout>
   
   <x-slot:title>{{ $title }}</x-slot:title>

     <!-- Bagian Pencarian -->
  <section class="container mx-auto p-6" x-show="show" x-transition.duration.700ms>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Bagian Pencarian -->
      <section id="search-section" 
               class="bg-white shadow-lg rounded-2xl p-6 col-span-2 transform transition duration-500 hover:scale-[1.02] hover:shadow-xl">
        <h2 class="text-xl font-semibold mb-4">Pencarian Berdasarkan Wilayah</h2>
        <form action="/hasil" method="get" class="grid grid-cols-1 md:grid-cols-2 gap-4">
          
          <!-- Provinsi -->
          <div>
            <label for="provinsi" class="block text-sm font-medium mb-1">Provinsi (opsional)</label>
            <select id="provinsi" name="provinsi" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
              <option value="">-- Pilih Provinsi --</option>
              <option value="jawa-tengah">Jawa Tengah</option>
              <option value="jawa-barat">Jawa Barat</option>
              <option value="jawa-timur">Jawa Timur</option>
            </select>
          </div>

          <!-- Kabupaten -->
          <div>
            <label for="kabupaten" class="block text-sm font-medium mb-1">Kabupaten</label>
            <select id="kabupaten" name="kabupaten" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
              <option value="">-- Pilih Kabupaten --</option>
            </select>
          </div>

          <!-- Kecamatan -->
          <div>
            <label for="kecamatan" class="block text-sm font-medium mb-1">Kecamatan</label>
            <select id="kecamatan" name="kecamatan" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
              <option value="">-- Pilih Kecamatan --</option>
            </select>
          </div>

          <!-- Desa -->
          <div>
            <label for="desa" class="block text-sm font-medium mb-1">Desa</label>
            <select id="desa" name="desa" required class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
              <option value="">-- Pilih Desa --</option>
            </select>
          </div>

          <!-- Tombol Cari -->
          <div class="md:col-span-2 flex justify-end mt-4">
            <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform transition duration-200 text-white font-semibold px-6 py-2 rounded-xl shadow">
              Cari
            </button>
          </div>
        </form>
      </section>

      <!-- Bagian Informasi Singkat -->
      <section id="info-section" 
               class="bg-white shadow-lg rounded-2xl p-6 transform transition duration-500 hover:scale-[1.02] hover:shadow-xl">
        <h2 class="text-xl font-semibold mb-4">Informasi Singkat</h2>
        <ul class="space-y-2">
          <li class="flex justify-between border-b pb-2">
            <span>Total TPS</span>
            <strong>12.345</strong>
          </li>
          <li class="flex justify-between border-b pb-2">
            <span>Jumlah Dokumen</span>
            <strong>8.765</strong>
          </li>
          <li class="flex justify-between">
            <span>Pengumuman</span>
            <strong class="text-blue-600">Pengumpulan dokumen C1 berakhir 20 Agustus</strong>
          </li>
        </ul>
      </section>

    </div>
  </section>

</x-layout>