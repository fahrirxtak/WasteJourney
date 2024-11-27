<x-public-layout>
     {{-- ? Header --}}
     <div class="relative w-full h-[400px] sm:h-[500px] lg:h-[600px]">
        <!-- Background Image -->
        <img src="{{ asset('foto/bg-blog.jpg') }}" alt="WasteJourney Background" class="w-full h-4/5 object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent h-4/5"></div>

        <!-- Text Content -->
        <div class="absolute inset-0 flex flex-col justify-start items-start pt-36 px-6 md:px-12 lg:px-20 ">
            <!-- Animasi pada teks kecil -->
            <p class="text-white text-sm md:text-base lg:text-lg font-light mb-2 animate__animated animate__fadeInLeft animate__delay-1s">
                Edukasi dan Tips <span class="text-green-500">Pengelolaan Sampah</span>
            </p>
            <!-- Animasi pada judul utama -->
            <h1 class="text-white text-2xl md:text-2xl lg:text-2xl font-semibold leading-snug animate__animated animate__fadeInUp animate__delay-2s">
                Temukan berbagai artikel inspiratif tentang pengelolaan sampah, tips daur ulang,<br> dan cerita sukses dari komunitas WasteJourney. Bersama-sama, kita belajar <br> menciptakan lingkungan yang lebih bersih dan hijau
            </h1>
        </div>
    </div>
    {{-- ! Header End --}}

      {{-- ? Blog --}}
      <div class=" px-6 overflow-hidden" data-aos="fade-up">
        <!-- Kartu Blog -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <!-- Kartu 1 -->
            <div class="p-6 group" data-aos="zoom-in">
                <div class="overflow-hidden rounded-md">
                    <img src="{{ asset('foto/blog1.png') }}" alt="Blog Image 1"
                        class="w-full h-[250px] object-cover mb-4 rounded-md transform transition-transform duration-500 ease-in-out group-hover:scale-105">
                </div>
                <h3 class="text-black text-xl font-bold mb-2">
                    Panduan Memilah Sampah di Rumah
                </h3>
                <p
                    class="text-[#969595] font-semibold text-lg mb-2 group-hover:text-black transition-colors duration-300">
                    Pelajari langkah-langkah sederhana untuk memilah sampah organik dan anorganik di rumah Anda.
                    Artikel ini memberikan panduan praktis yang bisa langsung...
                </p>
                <div class="border-b-2 border-[#969595] pb-4 mb-4"></div>
                <p class="text-green-500 text-sm">Desember 11, 2024</p>
            </div>

            <!-- Kartu 2 -->
            <div class="p-6 group" data-aos="zoom-in" data-aos-delay="200">
                <div class="overflow-hidden rounded-md">
                    <img src="{{ asset('foto/blog2.png') }}" alt="Blog Image 2"
                        class="w-full h-[250px] object-cover mb-4 rounded-md transform transition-transform duration-500 ease-in-out group-hover:scale-105">
                </div>
                <h3 class="text-black text-xl font-bold mb-2">
                    Manfaat Kompos dari Sampah Organik
                </h3>
                <p
                    class="text-[#969595] font-semibold text-lg mb-2 group-hover:text-black transition-colors duration-300">
                    Temukan bagaimana mengubah sampah organik rumah tangga menjadi kompos dapat mengurangi volume
                    sampah dan memberi.
                </p>
                <div class="border-b-2 border-[#969595] pb-4 mb-4"></div>
                <p class="text-green-500 text-sm">Desember 11, 2024</p>
            </div>

            <!-- Kartu 3 -->
            <div class="p-6 group" data-aos="zoom-in" data-aos-delay="400">
                <div class="overflow-hidden rounded-md">
                    <img src="{{ asset('foto/blog3.png') }}" alt="Blog Image 3"
                        class="w-full h-[250px] object-cover mb-4 rounded-md transform transition-transform duration-500 ease-in-out group-hover:scale-105">
                </div>
                <h3 class="text-black text-xl font-bold mb-2">
                    Tips Mengurangi Plastik Sekali Pakai
                </h3>
                <p
                    class="text-[#969595] font-semibold text-lg mb-2 group-hover:text-black transition-colors duration-300">
                    Dapatkan 10 tips praktis untuk mengurangi penggunaan plastik sekali pakai dan menggantinya
                    dengan alternatif ramah lingkungan.
                </p>
                <div class="border-b-2 border-[#969595] pb-4 mb-4"></div>
                <p class="text-green-500 text-sm">Desember 11, 2024</p>
            </div>
        </div>
    </div>
    {{-- ! Blog End --}}
</x-public-layout>
