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
      <p class="mb-2"><span class="font-semibold">Jumlah Pemilih:</span> {{ $tps->jumlah_pemilih }}</p>
      <p class="mb-4"><span class="font-semibold">Petugas KPPS:</span> {{ $tps->kpps }}</p>

      <!-- Dokumen -->
      <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Dokumen Hasil</h3>

        @if($tps->dokumen->count())

          @foreach($tps->dokumen as $dok)
            <button 
                data-modal-target="pdfModal" 
                data-modal-toggle="pdfModal"
                data-pdf-url="{{ route('dokumen.view', $dok->id) }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Lihat {{ $dok->jenis_dokumen }}
            </button>
        @endforeach

        @else
          <p class="text-gray-500">Belum ada dokumen diunggah</p>
        @endif
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="pdfModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
           justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Lihat Dokumen</h3>
          <button type="button" data-modal-hide="pdfModal"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                   rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center 
                   dark:hover:bg-gray-600 dark:hover:text-white">✕</button>
        </div>
        <!-- Body -->
        <div class="p-4">
          <iframe id="pdfFrame" src="" class="w-full h-[70vh] border rounded"></iframe>
        </div>
      </div>
    </div>
  </div>

  <script>
    // ketika tombol ditekan, ganti src iframe
    document.querySelectorAll("[data-modal-toggle='pdfModal']").forEach(button => {
      button.addEventListener("click", function() {
        const pdfUrl = this.getAttribute("data-pdf-url");
        alert(pdfUrl);
        document.getElementById("pdfFrame").src = pdfUrl;
      });
    });

    // kosongkan iframe saat modal ditutup
    document.querySelectorAll("[data-modal-hide='pdfModal']").forEach(button => {
      button.addEventListener("click", function() {
        document.getElementById("pdfFrame").src = "";
      });
    });
  </script>
</x-layout>
