<x-public-layout>
    {{-- ? Header --}}
    <div class="relative w-full h-[400px] sm:h-[500px] lg:h-[600px]">
       <!-- Background Image -->
       <img src="{{ asset('foto/bg-layanan.png') }}" alt="WasteJourney Background" class="w-full h-4/5 object-cover">

       <!-- Overlay -->
       <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent h-4/5"></div>

       <!-- Text Content -->
       <div class="absolute inset-0 flex flex-col justify-start items-start pt-36 px-6 md:px-12 lg:px-20 ">
           <!-- Animasi pada teks kecil -->
           <p class="text-white text-sm md:text-base lg:text-lg font-light mb-2">
              Layanan Kami
           </p>
           <!-- Animasi pada judul utama -->
           <h1 class="text-white text-2xl md:text-4xl lg:text-4xl font-semibold leading-snug">
               Solusi pengelolaan sampah praktis <br> untuk rumah tangga yang peduli <br> lingkungan.
           </h1>
       </div>
   </div>
   {{-- ! Header End --}}

   {{-- ? Layanan  --}}
   <div class="flex items-center justify-center min-h-screen relative space-x-40">
       <!-- Kartu Layanan Pertama -->
       <div class="relative bg-[#D0E5D1] rounded-lg shadow-lg max-w-xs w-full overflow-hidden group flex flex-col">
           <!-- Efek Hover Gambar Latar -->
           <div class="absolute inset-0 bg-cover bg-no-repeat bg-top group-hover:bg-top transition-all duration-500 opacity-0 group-hover:opacity-100"
                style="background-image: url('{{ asset('foto/bg service.png') }}');">
           </div>

           <!-- Konten Kartu -->
           <div class="p-6 flex flex-col h-full relative z-10">
               <!-- Gambar Utama -->
               <div class="p-3 mb-4 flex justify-start">
                   <img src="{{ asset('foto/icont/personal waste.png') }}" alt="Recycle Icon" class="w-1/3">
               </div>
               <!-- Judul -->
               <h2 class="text-lg font-semibold text-black mb-2 group-hover:text-white transition-all duration-300">Personal Waste Management</h2>
               <div class="w-12 h-1 bg-green-500 mb-4"></div>
               <!-- Deskripsi -->
               <p class="text-sm text-gray-700 group-hover:text-white transition-all duration-300">
                   WasteJourney memastikan sampah anorganik Anda dijemput secara rutin dan dipilah untuk didaur ulang, langsung dari rumah Anda. Membuat pengelolaan sampah jadi lebih mudah dan ramah lingkungan.
           </div>

           <!-- Tombol Selengkapnya, diposisikan di bawah deskripsi -->
           <div class="w-full overflow-hidden mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
               <a href="#"
                  class="w-full bg-green-500 text-white font-semibold py-3 flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-all duration-500 ease-in-out">
                   Selengkapnya
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 ml-2">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                   </svg>
               </a>
           </div>
       </div>

       <!-- Kartu Layanan Kedua (Yang Baru Ditambahkan) -->
       <div class="relative bg-[#D0E5D1] rounded-lg shadow-lg max-w-xs w-full overflow-hidden group flex flex-col">
           <!-- Efek Hover Gambar Latar -->
           <div class="absolute inset-0 bg-cover bg-no-repeat bg-top group-hover:bg-top transition-all duration-500 opacity-0 group-hover:opacity-100"
                style="background-image: url('{{ asset('foto/bg service.png') }}');">
           </div>

           <!-- Konten Kartu -->
           <div class="p-6 flex flex-col h-full relative z-10">
               <!-- Gambar Utama -->
               <div class="p-3 mb-4 flex justify-start">
                   <img src="{{ asset('foto/icont/send waste.png') }}" alt="Recycle Icon" class="w-1/3">
               </div>
               <!-- Judul -->
               <h2 class="text-lg font-semibold text-black mb-2 group-hover:text-white transition-all duration-300">Send Your Waste</h2>
               <div class="w-12 h-1 bg-green-500 mb-4"></div>
               <!-- Deskripsi -->
               <p class="text-sm text-gray-700 group-hover:text-white transition-all duration-300">
                   WasteJourney memastikan sampah anorganik Anda dijemput secara rutin dan dipilah untuk didaur ulang, langsung dari rumah Anda. Membuat pengelolaan sampah jadi lebih mudah dan ramah lingkungan.
           </div>

           <!-- Tombol Selengkapnya, diposisikan di bawah deskripsi -->
           <div class="w-full overflow-hidden mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
               <a href="#"
                  class="w-full bg-green-500 text-white font-semibold py-3 flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-all duration-500 ease-in-out">
                   Selengkapnya
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 ml-2">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                   </svg>
               </a>
           </div>
       </div>
   </div>
   {{-- ! Layanan End --}}
</x-guest-layout>
