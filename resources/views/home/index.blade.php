<x-guest-layout>
    <!-- Header Image -->
    <div class="relative flex items-start h-[60vh] bg-cover bg-center"
        style="background-image: url('{{ asset('header.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay hitam dengan opasitas -->
        <div class="relative z-10 text-left px-4 md:px-12 py-8 md:py-12 max-w-xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                Mengelola Sampah Lebih Mudah Untuk <span class="text-[#12D719]">Rumah Tangga</span>
            </h1>
        </div>
    </div>

    <!-- Informational Content -->
    <div
        class="bg-white shadow-lg rounded-lg mt-12 p-8 w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 relative transform -translate-y-36">
        <!-- Kartu 1 -->
        <div class="flex items-center text-left gap-4 group">
            <img src="{{ asset('info1.png') }}" alt="Informasi Praktis"
                class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
            <div>
                <h3 class="text-xl font-semibold">Informasi Praktis</h3>
                <p class="text-gray-600 mt-1 text-sm">Menyediakan langkah-langkah praktis dan sederhana untuk memilah
                    sampah, mengurangi limbah plastik, dan melakukan daur ulang.</p>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="flex items-center text-left gap-4 group">
            <img src="{{ asset('info2.png') }}" alt="Jemput Sampah"
                class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
            <div>
                <h3 class="text-xl font-semibold">Jemput Sampah</h3>
                <p class="text-gray-600 mt-1 text-sm">Layanan khusus untuk pengguna yang ingin berlangganan penjemputan
                    sampah daur ulang secara berkala langsung dari rumah.</p>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="flex items-center text-left gap-4 group">
            <img src="{{ asset('info3.png') }}" alt="Sumber Daya Edukasi"
                class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
            <div>
                <h3 class="text-xl font-semibold">Sumber Daya Edukasi</h3>
                <p class="text-gray-600 mt-1 text-sm">Beragam artikel yang mendidik pengguna tentang pentingnya
                    pengelolaan sampah dan dampaknya terhadap lingkungan.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col-reverse md:flex-row items-start justify-between">
            <div class="w-full md:w-1/2 flex justify-center md:justify-start">
                <img src="{{ asset('foto/3.png') }}" alt="Kids picking up trash"
                    class="rounded-md w-full h-auto max-w-xs md:max-w-md lg:max-w-lg">
            </div>
    
            <!-- Bagian Teks -->
            <div class="w-full flex flex-col justify-start px-4 mb- space-y-4">
                <!-- Judul Utama -->
                <h1 class="text-4xl font-bold"> Mengelola Sampah </h1>
                <!-- Sub Judul -->
                <h2 class="text-4xl font-bold text-green-600"> Secara Bertanggung Jawab </h2>
                <!-- Brand --> 
                <h3 class="text-4xl font-bold">
                    bersama <span class="inline">Waste<span class="text-blue-400">Journey</span></span>
                </h3>
    
                <!-- Deskripsi -->
                <p class="text-xl md:text-2xl mt-6">
                    Waste<span class="text-blue-400">Journey</span> adalah platform yang dirancang khusus untuk membantu
                    Anda dalam mengelola sampah rumah tangga secara mudah dan efisien. Kami menyediakan panduan praktis,
                    sumber edukasi, yang memudahkan Anda memahami dan menjalankan proses pengurangan, pemilahan, dan
                    daur ulang sampah di kehidupan sehari-hari.
                </p>
    
                <!-- Tombol -->
                <div class="pt-6">
                    <button
                        class="bg-green-500 hover:bg-green-600 text-black text-xl font-semibold py-4 px-12 rounded-full w-full md:w-auto">
                        Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </div>
    

</x-guest-layout>