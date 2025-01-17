<x-public-layout>

    {{-- ? Header  --}}
    <div class="relative flex items-center h-[60vh] bg-cover bg-center "
        style="background-image: url('{{ asset('header.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay hitam dengan opasitas -->
        <div class="relative z-10 text-left px-4 md:px-12 py-8 md:py-12 max-w-xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight animate__animated animate__fadeInLeft">
                Mengelola Sampah Lebih Mudah Untuk <span class="text-[#12D719]">Rumah Tangga</span>
            </h1>
        </div>
    </div>
    {{-- ! Header End --}}


    {{-- ? Informasi  --}}
    <div
    class="relative bg-white shadow-lg rounded-lg p-8 w-full max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 transform -translate-y-16 z-10 ">
    <!-- Card 1 -->
    <div class="flex items-center text-left gap-4 group animate__animated animate__fadeInUp"
        style="animation-delay: 0.5s;">
        <img src="{{ asset('info1.png') }}" alt="Panduan Pengelolaan Sampah"
            class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
        <div>
            <h3 class="text-xl font-semibold">Pengelolaan Sampah</h3>
            <p class="text-gray-600 mt-1 text-sm">Panduan praktis untuk memilah sampah di rumah, mengurangi limbah plastik, dan mengelola sampah dengan lebih bijak.</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="flex items-center text-left gap-4 group animate__animated animate__fadeInUp "
        style="animation-delay: 1s;">
        <img src="{{ asset('info2.png') }}" alt="Kalkulator Jejak Sampah"
            class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
        <div>
            <h3 class="text-xl font-semibold">Kalkulator Jejak Sampah</h3>
            <p class="text-gray-600 mt-1 text-sm">Fitur untuk membantu Anda memahami jumlah sampah yang dihasilkan dan memberikan saran untuk pengelolaan yang lebih baik.</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="flex items-center text-left gap-4 group animate__animated animate__fadeInUp"
        style="animation-delay: 1.5s;">
        <img src="{{ asset('info3.png') }}" alt="Artikel Edukasi"
            class="w-16 h-16 transform transition-transform duration-300 group-hover:scale-110">
        <div>
            <h3 class="text-xl font-semibold">Artikel Edukasi</h3>
            <p class="text-gray-600 mt-1 text-sm">Artikel menarik dan mendalam tentang dampak positif pengelolaan sampah terhadap lingkungan dan kehidupan sehari-hari.</p>
        </div>
    </div>
</div>

    {{-- ! informasi End --}}

    {{-- ? Tentang --}}
    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Bagian Gambar -->
            <div class="w-full md:w-1/2 flex flex-col items-center md:items-start space-y-4" data-aos="fade-right">
                <div class="relative">
                    <img src="{{ asset('foto/3.png') }}" alt="Kids picking up trash"
                        class="rounded-md w-full h-auto max-w-xs md:max-w-md lg:max-w-lg" data-aos="zoom-in">
                </div>
            </div>

            <!-- Bagian Teks -->
            <div class="w-full md:w-1/2 flex flex-col justify-start px-4 space-y-4 text-left" data-aos="fade-right">
                <!-- Judul Utama dengan Sub Judul dan Brand dalam satu elemen -->
                <h1 class="text-4xl font-bold leading-none" data-aos="fade-up" data-aos-delay="100">
                    Mengelola Sampah <br>
                    <span class="text-4xl font-bold text-green-600" data-aos="fade-up" data-aos-delay="200">Secara
                        Bertanggung Jawab</span> <br>
                    bersama <span class="inline" data-aos="fade-up" data-aos-delay="300">Waste<span
                            class="text-blue-400">Journey</span></span>
                </h1>

                <!-- Deskripsi -->
                <p class="text-xl md:text-2xl mt-6" data-aos="fade-up" data-aos-delay="400">
                    Waste<span class="text-blue-400">Journey</span> adalah platform yang dirancang khusus untuk membantu
                    Anda dalam mengelola sampah rumah tangga secara mudah dan efisien. Kami menyediakan panduan praktis,
                    sumber edukasi, yang memudahkan Anda memahami dan menjalankan proses pengurangan, pemilahan, dan
                    daur
                    ulang sampah di kehidupan sehari-hari.
                </p>

                <!-- Tombol -->
                <div class="pt-4" data-aos="zoom-in" data-aos-delay="500">
                    <a href="#"
                        class="relative bg-green-500 text-white text-lg font-semibold py-3 px-10 rounded-full w-full md:w-auto overflow-hidden group transform transition-all duration-300 ease-in-out hover:scale-105">
                        <span
                            class="absolute inset-0 w-0 h-full bg-white opacity-20 transition-all duration-500 ease-in-out group-hover:w-full"></span>
                        <span class="relative z-10">Selengkapnya</span>
                        <span
                            class="absolute inset-0 border-2 border-transparent rounded-full group-hover:border-white transition-all duration-300 ease-in-out"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Tentang End --}}





    {{-- ? Statistik --}}
    <div class="relative">
        <div class="relative bg-cover bg-center text-white p-14 flex flex-col md:flex-row items-center justify-between mt-36 max-h-screen bg-fixed overflow-hidden w-full"
            style="background-image: url({{ asset('foto/bg-waste.png') }});" data-aos="fade-up">
            <!-- Bagian Kiri: Teks Promosi -->
            <div class="relative z-10 max-w-lg text-center md:text-left" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold">
                    Bergabung dengan <span class="text-green-500">500+</span> Rumah Tangga Lainnya yang Sudah
                    Mengelola Sampah dengan <span class="text-blue-400">WasteJourney</span>!
                </h2>
                <button
                    class="mt-6 px-8 py-3 bg-green-600 text-white font-semibold rounded-md shadow-lg transform transition-all duration-300 ease-in-out hover:bg-green-700 hover:shadow-xl hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50"
                    data-aos="zoom-in">
                    Bergabung Sekarang
                </button>
            </div>

            <!-- Bagian Bawah: Statistik -->
            <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900 to-transparent p-6 flex justify-end gap-6 items-end text-center text-white pr-10"
                data-aos="fade-up">
                <div class="mr-3" data-aos="flip-left">
                    <span class="text-3xl font-bold">678</span>
                    <p class="text-gray-300">Klien Rumah Tangga</p>
                </div>
                <div class="mr-28" data-aos="flip-right">
                    <span class="text-3xl font-bold">2,000+</span>
                    <p class="text-gray-300">Ton Sampah Terkelola</p>
                </div>
            </div>
        </div>

        <!-- Gambar di Kanan -->
        <div class="absolute right-10 -top-20 rounded-md shadow-lg h-[280px] md:h-[300px] max-w-full"
            data-aos="fade-up" data-aos-offset="50">
            <img src="{{ asset('foto/family waste2.jpg') }}" alt="Gambar Keluarga Mengelola Sampah"
                class="object-cover w-full h-full">
        </div>

    </div>
    {{-- ! Statistik End --}}


    {{-- ? Blog --}}
    <div class="py-16 px-6 overflow-hidden" data-aos="fade-up">
        <div class="flex justify-between items-center mb-8">
            <!-- Judul Blog Terbaru -->
            <h2 class="text-green-500 text-2xl font-semibold flex items-center gap-2" data-aos="fade-right">
                <span>🌱</span> Blog Terbaru
            </h2>
            <!-- Tombol Lihat Blog Lainnya -->
            <a href="#"
                class="relative inline-block bg-green-600 text-white font-semibold py-2 px-4 rounded-md overflow-hidden group"
                data-aos="fade-left">
                <span
                    class="absolute inset-0 w-full h-full bg-green-700 origin-center scale-x-0 group-hover:scale-x-100 group-hover:origin-left transition-all duration-500 ease-out"></span>
                <span class="relative z-10">Lihat Blog Lainnya <span>🌿</span></span>
            </a>
        </div>

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


    {{-- ? Iformasi Praktis --}}
    <div x-data="{
        selected: 1,
        content: [
            { title: 'Pengurangan Sampah', text: 'Untuk mengurangi sampah sehari-hari, pilihlah produk dengan kemasan minimal dan gunakan barang yang dapat dipakai ulang...' },
            { title: 'Pemilahan Sampah', text: 'Pemilahan sampah adalah langkah penting dalam daur ulang. Pisahkan sampah organik dan anorganik...' },
            { title: 'Tips Daur Ulang', text: 'Daur ulang dapat membantu mengurangi limbah. Cobalah untuk membersihkan dan memisahkan barang-barang yang dapat didaur ulang...' },
            { title: 'Pengomposan Rumah Tangga', text: 'Pengomposan adalah cara yang efektif untuk mengurangi sampah organik. Kumpulkan sisa makanan, daun kering...' }
        ],
        setSelected(option) {
            this.selected = option;
            localStorage.setItem('selectedContent', option);
        }
    }" class="bg-cover bg-no-repeat bg-center min-h-[120vh] "
        style="background-image: url({{ asset('foto/bg-praktis.png') }});">
        <div class="relative h-full">
            <div class="absolute top-16 left-6 text-white" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-4">Informasi Praktis</h3>
                <h1 class="text-4xl font-semibold">Cara Efektif Memilah dan <br>
                    <span class="text-green-600">Mengelola Sampah di Rumah</span>
                </h1>
            </div>

            <div class="flex justify-end items-end h-full">
                <div class="max-w-5xl p-6 bg-[#137D17] bg-opacity-90 text-white rounded-lg shadow-lg mt-96 -mb-64">
                    <div class="grid grid-cols-3 gap-4 overflow-hidden">
                        <div class="col-span-1 p-6 rounded-lg" data-aos="fade-right">
                            <ul class="space-y-6">
                                <template x-for="(item, index) in content" :key="index">
                                    <li class="flex items-center cursor-pointer border-b border-[#C6C2C2] pb-4"
                                        :class="{
                                            ' text-white': selected === index + 1,
                                            'text-white': selected !== index + 1
                                        }"
                                        @click="setSelected(index + 1)">
                                        <div class="w-10 h-10 flex items-center justify-center font-bold rounded-full mr-4 shadow-md transition-all duration-300 ease-in-out"
                                            :class="{
                                                'bg-green-600': selected === index + 1,
                                                'bg-white': selected !== index + 1
                                            }">
                                            <span class="text-black" x-text="index + 1"></span>
                                        </div>
                                        <span class="text-lg font-semibold" x-text="item.title"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <div class="col-span-2 p-6 bg-opacity-90 rounded-lg transition-opacity duration-300 opacity-100"
                            data-aos="fade-left">
                            <h3 class="text-xl font-bold mb-4" x-text="content[selected - 1].title"></h3>
                            <p class="text-white" x-text="content[selected - 1].text"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- ! Informasi Praktis End --}}


    {{-- ? Testimonials --}}
    <div x-data="{
        currentSlide: 0,
        intervalId: null,
        testimonials: [{
                content: 'WasteJourney sangat membantu dalam mengelola sampah di rumah. Layanan pengambilan sampahnya sangat tepat waktu.',
                name: 'Rizal Mukroh',
                role: 'Freelancer',
                image: '{{ asset('foto/testi1.png') }}',
            },
            {
                content: 'Saya merasa lebih bertanggung jawab terhadap sampah yang saya hasilkan. Kini saya tahu bahwa sampah anorganik saya didaur ulang dengan baik.',
                name: 'Fhardan Hardiansyah',
                role: 'Karyawan Swasta',
                image: '{{ asset('foto/testi2.png') }}',
            },
            {
                content: 'Menggunakan WasteJourney membuat saya sadar akan pentingnya memilah sampah dari rumah. Aplikasinya sangat mudah digunakan!',
                name: 'Andini Putri',
                role: 'Ibu Rumah Tangga',
                image: '{{ asset('foto/testi3.png') }}',
            },
            {
                content: 'Saya suka bagaimana WasteJourney memberikan panduan langkah demi langkah untuk pengelolaan sampah di rumah.',
                name: 'Budi Santoso',
                role: 'Pengusaha',
                image: '{{ asset('foto/testi4.jpg') }}',
            }
        ],
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + Math.ceil(this.testimonials.length / 2)) % Math.ceil(this.testimonials.length / 2)
        },
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % Math.ceil(this.testimonials.length / 2)
        },
        goToSlide(index) {
            this.currentSlide = index
        },
        startAutoSlide() {
            this.intervalId = setInterval(() => {
                this.nextSlide();
            }, 3000); // Mengubah slide setiap 3 detik
        },
        stopAutoSlide() {
            clearInterval(this.intervalId);
        }
    }" x-init="startAutoSlide()" @mouseenter="stopAutoSlide" @mouseleave="startAutoSlide"
        class="px-6 py-16 mx-auto max-w-7xl sm:px-12 lg:px-20 mt-20">

    <div class="text-center mb-16">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl" data-aos="fade-up">
            Bersama Membangun <span class="text-green-500">Masa Depan</span> yang Lebih <span class="text-green-500">Hijau</span>
        </h2>
        <p class="mt-4 text-lg text-gray-600" data-aos="fade-up" data-aos-delay="100">
            Pengguna kami telah merasakan dampak nyata dari WasteJourney. Inilah pengalaman <br> mereka dalam mengelola sampah dengan lebih bijak.
        </p>
    </div>

    <!-- Container Testimonial -->
    <div class="relative flex items-center justify-center">
        <!-- Tombol Navigasi Kiri -->
        <button @click="prevSlide"
            class="absolute left-0 z-10 p-2 rounded-full bg-white shadow-lg text-green-500 hover:bg-green-500 hover:text-white transition"
            aria-label="Previous slide" data-aos="fade-left">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Slider Testimonial dengan 2 Testimonial per Slide -->
        <div class="overflow-hidden w-full max-w-5xl">
            <div class="flex transition-transform duration-500 ease-in-out"
                :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                <template x-for="index in Math.ceil(testimonials.length / 2)" :key="index">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 w-full flex-shrink-0 px-4">
                        <template x-for="(testimonial, i) in testimonials.slice((index - 1) * 2, index * 2)"
                            :key="i">
                            <div class="bg-white rounded-lg shadow-lg p-8 mb-10" data-aos="fade-up" data-aos-delay="200">
                                <p class="text-lg italic text-gray-700 mb-6" x-text="testimonial.content"></p>
                                <div class="flex items-center mt-4">
                                    <img :src="testimonial.image" :alt="testimonial.name"
                                        class="rounded-full border-2 border-green-500" width="60" height="60" />
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900" x-text="testimonial.name"></h4>
                                        <p class="text-sm text-green-500" x-text="testimonial.role"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </template>
            </div>
        </div>

        <!-- Tombol Navigasi Kanan -->
        <button @click="nextSlide"
            class="absolute right-0 z-10 p-2 rounded-full bg-white shadow-lg text-green-500 hover:bg-green-500 hover:text-white transition"
            aria-label="Next slide" data-aos="fade-right">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Indikator Slide -->
    <div class="flex justify-center mt-8 gap-4">
        <template x-for="(_, index) in Math.ceil(testimonials.length / 2)" :key="index">
            <button @click="goToSlide(index)"
                :class="currentSlide === index ? 'bg-green-500 scale-125' : 'bg-gray-300'"
                class="w-4 h-4 rounded-full transition-transform transform hover:scale-110"
                aria-label="Go to slide" data-aos="fade-up" data-aos-delay="300"></button>
        </template>
    </div>

    {{-- ! Testimonials End --}}
</x-guest-layout>
