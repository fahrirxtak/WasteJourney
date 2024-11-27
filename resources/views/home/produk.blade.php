<x-public-layout>
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
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            ALAT PENDUKUNG PENGOLAHAN SAMPAH
        </h2>
        <div class="border-b-4 border-green-500 w-24 mx-auto mb-6"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 w-full px-8 lg:px-16">
            <!-- Card 1 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 text-center group">
                <div class="overflow-hidden">
                    <img src="{{ asset('foto/bahan.webp') }}" alt="Capsule Waste Bin"
                        class="w-52 h-52 mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Capsule Waste Bin</h3>
                <p class="text-sm text-gray-500 mt-3">Dimensi: 100 × 30 × 75 cm</p>
                <p class="text-xl font-bold text-[#12D719] mt-4">Rp 615.000</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 text-center group">
                <div class="overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Magobox XL Fullset"
                        class="w-52 h-52  mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Magobox XL Fullset</h3>
                <p class="text-sm text-gray-500 mt-3">Magobox id</p>
                <p class="text-xl font-bold text-[#12D719] mt-4">Rp 615.000</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 text-center group">
                <div class="overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Magobox XL"
                        class="w-52 h-52  mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Magobox XL</h3>
                <p class="text-sm text-gray-500 mt-3">Magobox id</p>
                <p class="text-xl font-bold text-[#12D719] mt-4">Rp 385.000</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 text-center group">
                <div class="overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Magobox Mini Fullset"
                        class="w-52 h-52  mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Magobox Mini Fullset</h3>
                <p class="text-sm text-gray-500 mt-3">Magobox id</p>
                <p class="text-xl font-bold text-[#12D719] mt-4">Rp 529.000</p>
            </div>
        </div>
    </div>
    {{-- ! Produk End --}}
</x-public-layout>
