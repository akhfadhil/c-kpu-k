<x-layout>

   <!-- Title header -->
   <!-- <x-slot:title>{{ $title }}</x-slot:title> -->

  <section class="container mx-auto p-6">
    <!-- Breadcrumb -->
    <nav class="text-sm mb-6">
      <ol class="flex flex-wrap text-gray-600">
        <li><a href="/" class="hover:text-blue-600">Provinsi Jawa Timur</a></li>
        <li class="mx-2">></li>
        <li><a href="#" class="hover:text-blue-600">Kabupaten Banyuwangi</a></li>
        <li class="mx-2">></li>
        <li><a href="#" class="hover:text-blue-600">Kecamatan {{ $tps->desa->kecamatan->nama_kecamatan }}</a></li>
        <li class="mx-2">></li>
        <li><a href="{{ route('desa.show', $tps->desa->id) }}" class="hover:text-blue-600">Desa {{ $tps->desa->nama_desa }}</a></li>
        <li class="mx-2">></li>
        <li class="text-gray-800 font-semibold">{{ $tps->kode }}</li>
      </ol>
    </nav>

    <!-- Detail TPS -->
    <div class="bg-white shadow-lg rounded-2xl p-6">
      <h2 class="text-xl font-semibold mb-4">Detail TPS {{ $tps->kode}}</h2>

      <p class="mb-2"><span class="font-semibold">Alamat:</span> {{ $tps->lokasi_deskripsi }}</p>
      <p class="mb-2"><span class="font-semibold">Jumlah Pemilih:!!!</span> {{ $tps->jumlah_pemilih }}</p>
      <p class="mb-4"><span class="font-semibold">Petugas KPPS:!!!</span> {{ $tps->kpps }}</p>

      <!-- Dokumen !!! -->
      <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Dokumen Hasil</h3>
        @if($tps->dokumen)
          <!-- <a href="{{ asset('storage/'.$tps->dokumen) }}" target="_blank"
             class="inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-xl shadow">
            Lihat Dokumen
          </a> -->
          @foreach ($tps->tps as $tps)
          <button data-modal-target="pdfModal" data-modal-toggle="pdfModal"
              class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
              Lihat PDF
          </button>
        @else
          <p class="text-gray-500">Belum ada dokumen diunggah</p>
        @endif
      </div>
    </div>
  </section>
</x-layout>
