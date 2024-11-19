<x-guest-layout>
    {{-- ? Header --}}
    <div class="relative w-full h-[400px] sm:h-[500px] lg:h-[600px]">
        <!-- Background Image -->
        <img src="{{ asset('foto/bg-sejarah.jpg') }}" alt="WasteJourney Background" class="w-full h-4/5 object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent h-4/5"></div>

        <!-- Text Content -->
        <div class="absolute inset-0 flex flex-col justify-start items-start pt-36 px-6 md:px-12 lg:px-20 ">
            <!-- Animasi pada teks kecil -->
            <p
                class="text-white text-sm md:text-base lg:text-lg font-light mb-2 animate__animated animate__fadeInLeft animate__delay-1s">
                Produk Kami
            </p>
            <!-- Animasi pada judul utama -->
            <h1
                class="text-white text-2xl md:text-4xl lg:text-4xl font-semibold leading-snug animate__animated animate__fadeInUp animate__delay-2s">
                Solusi untuk Pengelolaan Sampah yang <br> Mudah dan Bertanggung Jawab
            </h1>
        </div>
    </div>
    {{-- ! Header End --}}

    {{-- ? Produk --}}
    <div class="container mx-auto py-8 max-w-screen-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">UNTUK PERSONAL</h2>
        <div class="border-b-4 border-green-500 w-24 mb-6"></div>

        <!-- Cards Section -->
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <!-- Card 1 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center text-center p-4">
            <img src="https://via.placeholder.com/300" alt="Komposter Lengkap" class="w-full h-48 object-cover mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Komposter Lengkap</h3>
            <p class="text-gray-500 text-sm">Sustaination</p>
            <p class="text-green-500 font-bold text-lg">Rp 236.000</p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center text-center p-4">
            <img src="https://via.placeholder.com/300" alt="Composting Tools" class="w-full h-48 object-cover mb-4">
            <div class="bg-teal-100 text-teal-600 text-xs font-bold px-2 py-1 rounded-full inline-block mb-2">Bali Only</div>
            <h3 class="text-lg font-semibold text-gray-800">Composting Tools</h3>
            <p class="text-gray-500 text-sm">EcoBali</p>
            <p class="text-green-500 font-bold text-lg">Rp 1.550.000</p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center text-center p-4">
            <img src="https://via.placeholder.com/300" alt="Magokits" class="w-full h-48 object-cover mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Magokits</h3>
            <p class="text-gray-500 text-sm">Magobox id</p>
            <p class="text-green-500 font-bold text-lg">Rp 150.000</p>
          </div>

          <!-- Card 4 -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center text-center p-4">
            <img src="https://via.placeholder.com/300" alt="Kompor Biogas" class="w-full h-48 object-cover mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Kompor Biogas</h3>
            <p class="text-gray-500 text-sm">EcoVerde Solutions</p>
            <p class="text-green-500 font-bold text-lg">Rp 14.990.000</p>
          </div>
        </div>
      </div>

    {{-- ! Produk End --}}
</x-guest-layout>
