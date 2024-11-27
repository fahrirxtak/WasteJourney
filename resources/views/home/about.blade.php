<x-public-layout>
    {{-- ? Header --}}
    <div class="relative w-full h-[400px] sm:h-[500px] lg:h-[600px]">
        <!-- Background Image -->
        <img src="{{ asset('foto/bg-about.jpg') }}" alt="WasteJourney Background" class="w-full h-4/5 object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent h-4/5"></div>

        <!-- Text Content -->
        <div class="absolute inset-0 flex flex-col justify-start items-start pt-36 px-6 md:px-12 lg:px-20 ">
            <!-- Animasi pada teks kecil -->
            <p class="text-white text-sm md:text-base lg:text-lg font-light mb-2 animate__animated animate__fadeInLeft animate__delay-1s">
                Kenali lebih dekat Waste<span class="text-green-500">Journey</span>
            </p>
            <!-- Animasi pada judul utama -->
            <h1 class="text-white text-2xl md:text-4xl lg:text-4xl font-semibold leading-snug animate__animated animate__fadeInUp animate__delay-2s">
                platform <span class="text-green-400 font-semibold">pengelolaan sampah</span> yang dirancang untuk <br
                    class="hidden md:block">
                membangun masa depan yang lebih hijau bersama Anda.
            </h1>
        </div>
    </div>
    {{-- ! Header End --}}

    {{-- ? Tentang --}}
    <div class="bg-white py-12 px-4 md:px-12 lg:px-24 overflow-hidden">
        <div class="max-w-10xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- Left side: Image -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <!-- Gambar Utama -->
                    <div class="relative overflow-hidden rounded-lg z-10">
                        <img src="{{ asset('foto/about.png') }}" alt="Tentang Kami" class="w-full h-auto object-cover rounded-lg">
                    </div>

                    <!-- Kotak Gradient di Belakang -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-r from-green-500 to-green-700 rounded-lg w-[70%] lg:w-[60%] xl:w-[55%] p-4 z-20" data-aos="zoom-in">
                        <!-- Teks Quotes di Dalam Kotak Gradient -->
                        <div class="text-white text-lg font-semibold">
                            "Masa depan yang bersih dimulai dari rumah yang peduli akan sampahnya"
                        </div>
                    </div>
                </div>

                <!-- Right side: Content -->
                <div class="w-full lg:w-1/2 flex flex-col items-start" data-aos="fade-left">
                    <h2 class="text-sm md:text-2xl font-semibold text-green-500 mb-4">
                        Tentang Kami -
                    </h2>
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        Menciptakan Kehidupan Bersih di Setiap Rumah
                    </h3>
                    <p class="text-sm md:text-base lg:text-lg text-black mb-8">
                        WasteJourney hadir untuk mewujudkan masa depan yang lebih hijau dan berkelanjutan dengan membantu rumah tangga dan individu dalam mengelola sampah mereka secara bertanggung jawab. Kami percaya bahwa setiap langkah kecil dalam pengelolaan sampah dapat memberikan dampak besar untuk menjaga lingkungan kita tetap bersih dan sehat.
                    </p>

                    <!-- Vision and Mission sections -->
                    <div class="space-y-8 w-full">
                        <div class="flex items-start gap-4" data-aos="fade-up">
                            <div class="w-16 h-16 flex-shrink-0">
                                <img src="{{ asset('foto/icont/earth.png') }}" alt="Vision Icon" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Visi</h4>
                                <p class="text-sm md:text-base text-black">
                                    Menciptakan lingkungan yang bersih dan sehat dengan memfasilitasi pengelolaan sampah yang terintegrasi dan ramah lingkungan bagi rumah tangga di seluruh Indonesia.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-16 h-16 flex-shrink-0">
                                <img src="{{ asset('foto/icont/recyle.png') }}" alt="Mission Icon" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Misi</h4>
                                <p class="text-sm md:text-base text-black">
                                    Menghubungkan rumah tangga dengan solusi pengelolaan sampah yang praktis dan mudah digunakan, serta meningkatkan kesadaran masyarakat akan pentingnya memilah dan mendaur ulang sampah demi masa depan yang lebih baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Tentang End --}}

    {{-- ? Sejarah --}}
    <div class="container mx-auto px-4 py-8 max-w-7xl overflow-hidden" x-data="{ currentText: 'Pilih langkah untuk melihat detail.', activeIndex: null }">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-black">Sejarah Waste</span><span class="text-[#12D719]">Journey</span>
            </h1>
            <div class="text-lg md:text-xl space-y-1">
                <p class="text-gray-500">Perjalanan kami dalam menciptakan solusi</p>
                <p class="text-green-500 font-medium">pengelolaan sampah yang berkelanjutan</p>
            </div>
        </div>

        <!-- Timeline Section -->
        <div class="relative pb-20">
            <!-- Timeline Line Container -->
            <div class="relative">
                <!-- Horizontal Lines (Desktop) -->
                <div class="hidden md:flex justify-between absolute w-full top-8">
                    <div class="w-1/3 h-0.5 bg-green-400" data-aos="fade-right"></div>
                    <div class="w-1/3 h-0.5 bg-green-400" data-aos="fade-down"></div>
                    <div class="w-1/3 h-0.5 bg-green-400" data-aos="fade-left"></div>
                </div>

                <!-- Timeline Points with Clickable Feature -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-16 md:gap-4">
                    <!-- Point 1 - Awal Mula -->
                    <button @click="currentText = 'WasteJourney didirikan pada tahun 2024 dengan tujuan membantu rumah tangga dan individu dalam mengelola sampah mereka dengan lebih efektif.'; activeIndex = 1"
                        :class="{' text-black': activeIndex === 1, 'text-green-600': activeIndex !== 1}"
                        class="flex flex-col items-center relative group cursor-pointer" data-aos="zoom-in">
                        <div :class="{'bg-green-500': activeIndex === 1, 'bg-green-100': activeIndex !== 1}"
                             class="rounded-full p-5 shadow-lg z-10 transform transition-all duration-300 group-hover:scale-110">
                             <i class="fas fa-history w-8 h-8 text-2xl"></i>
                        </div>
                        <span class="font-medium text-sm mt-3">Awal Mula</span>
                    </button>

                    <!-- Point 2 -->
                    <button @click="currentText = 'Langkah awal WasteJourney melibatkan pengembangan teknologi yang ramah lingkungan, fokus pada daur ulang dan pengelolaan sampah organik.'; activeIndex = 2"
                        :class="{' text-black': activeIndex === 2, 'text-green-600': activeIndex !== 2}"
                        class="flex flex-col items-center relative group cursor-pointer" data-aos="zoom-in">
                        <div :class="{'bg-green-500': activeIndex === 2, 'bg-green-100': activeIndex !== 2}"
                             class="rounded-full p-5 shadow-lg z-10 transform transition-all duration-300 group-hover:scale-110">
                             <i class="fas fa-leaf text-2xl w-8 h-8"></i>
                        </div>
                        <span class="font-medium text-sm mt-3">Langkah Awal</span>
                    </button>

                    <!-- Point 3 -->
                    <button @click="currentText = 'Selama bertahun-tahun, WasteJourney terus berkembang, menambah lebih banyak inovasi untuk meningkatkan efisiensi pengelolaan sampah.'; activeIndex = 3"
                        :class="{' text-black': activeIndex === 3, 'text-green-600': activeIndex !== 3}"
                        class="flex flex-col items-center relative group cursor-pointer" data-aos="zoom-in">
                        <div :class="{'bg-green-500': activeIndex === 3, 'bg-green-100': activeIndex !== 3}"
                             class="rounded-full p-5 shadow-lg z-10 transform transition-all duration-300 group-hover:scale-110">
                             <i class="fas fa-cogs text-2xl w-8 h-8"></i>
                        </div>
                        <span class="font-medium text-sm mt-3">Perkembangan</span>
                    </button>

                    <!-- Point 4 -->
                    <button @click="currentText = 'Visi masa depan kami adalah menciptakan sistem pengelolaan sampah yang sepenuhnya otomatis, mengurangi jejak karbon dan meningkatkan partisipasi masyarakat.'; activeIndex = 4"
                        :class="{' text-black': activeIndex === 4, 'text-green-600': activeIndex !== 4}"
                        class="flex flex-col items-center relative group cursor-pointer" data-aos="zoom-in">
                        <div :class="{'bg-green-500': activeIndex === 4, 'bg-green-100': activeIndex !== 4}"
                             class="rounded-full p-5 shadow-lg z-10 transform transition-all duration-300 group-hover:scale-110">
                             <i class="fas fa-globe text-2xl w-8 h-8"></i>
                        </div>
                        <span class="font-medium text-sm mt-3">Visi Masa Depan</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Content Section to display the current selected text -->
        <div class="bg-cover bg-center relative" style="background-image: url('{{ asset('foto/bg-sejarah.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="flex items-center justify-start h-64 md:h-96 text-white p-8 relative z-10" data-aos="fade-up">
                <div class="max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Informasi Terkini:</h2>
                    <p class="text-lg md:text-xl">
                        <span x-text="currentText"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Sejarah End --}}

    {{-- ? Values --}}
    <div class="container mx-auto px-6 py-10">
        <!-- Section: Our Values -->
        <div class="text-center mb-6">
            <h2 class="text-xl md:text-2xl font-semibold text-gray-700">Our Values</h2>
            <div class="mt-2 h-1 w-16 bg-green-500 mx-auto"></div>
        </div>

        <!-- Title Section -->
        <div class="flex justify-center mb-10">
            <img src="{{ asset('foto/icont/journey.png') }}" alt="Journey Title" class="w-48 md:w-64 lg:w-72">
        </div>

        <!-- Grid Section -->
        <div class="grid gap-10 lg:gap-16 lg:grid-cols-3 md:grid-cols-2">
            <!-- Item 1 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/joy in progress.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Joy in Progress</strong><br> Menikmati setiap langkah menuju perubahan positif.
                </p>
            </div>

            <!-- Item 2 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/oppurtunity to grow.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Opportunity to Grow</strong><br> Tantangan adalah kesempatan untuk berkembang.
                </p>
            </div>

            <!-- Item 3 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/understanding path.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Understanding Path</strong><br> Memahami langkah-langkah kecil yang membawa perubahan besar.
                </p>
            </div>

            <!-- Item 4 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/resilence.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Resilience</strong><br> Tetap kuat menghadapi setiap rintangan.
                </p>
            </div>

            <!-- Item 5 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/never give up.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Never Give Up</strong><br> Jangan pernah menyerah dalam mencapai tujuan.
                </p>
            </div>

            <!-- Item 6 -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-cover bg-center rounded-full"
                    style="background-image: url('{{ asset('foto/icont/embrace.png') }}');"></div>
                <p class="mt-4 text-gray-700 text-sm md:text-base">
                    <strong>Embrace the Journey</strong><br> Hargai setiap proses dalam perjalanan menuju kehidupan bersih.
                </p>
            </div>
        </div>
    </div>
    {{-- ! Values End --}}

    {{-- ? Team  --}}
    <div class="container mx-auto px-6 py-10">
        <!-- Title Section -->
        <div class="text-center mb-10">
            <h2 class="text-xl font-semibold text-gray-500 tracking-wide">Team Kami</h2>
            <h1 class="text-4xl font-bold text-gray-800 mt-2">Berkenalan Dengan Team Kami -</h1>
        </div>

        <!-- Card Section -->
        <div class="grid gap-10 md:grid-cols-3 sm:grid-cols-1">
            <!-- Card 1 -->
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden border group" data-aos="fade-up" data-aos-duration="1000">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('foto/worker.png') }}" alt="Worker" class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <img src="{{ asset('foto/highlight.png') }}" alt="Highlight" class="absolute bottom-0 right-0 w-32 h-20 transform translate-y-full translate-x-full group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <p class="uppercase text-gray-500 text-sm tracking-wide">worker</p>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">Ujang Sulaeman</h3>
                    <div class="w-full border-t border-gray-300 mt-4"></div>
                    <div class="flex justify-center space-x-4 mt-6">
                        <a href="#" class="text-gray-500 hover:text-blue-500 text-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 text-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-pink-500 text-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-500 text-lg">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 text-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden border group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('foto/asistent.png') }}" alt="Assistant" class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <img src="{{ asset('foto/highlight.png') }}" alt="Highlight" class="absolute bottom-0 right-0 w-32 h-20 transform translate-y-full translate-x-full group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <p class="uppercase text-gray-500 text-sm tracking-wide">Asistent</p>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">Jane Doe</h3>
                    <div class="w-full border-t border-gray-300 mt-4"></div>
                    <div class="flex justify-center space-x-4 mt-6">
                        <a href="#" class="text-gray-500 hover:text-blue-500 text-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 text-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-pink-500 text-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-500 text-lg">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 text-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden border group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('foto/founder.png') }}" alt="Founder" class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <img src="{{ asset('foto/highlight.png') }}" alt="Highlight" class="absolute bottom-0 right-0 w-32 h-20 transform translate-y-full translate-x-full group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <p class="uppercase text-gray-500 text-sm tracking-wide">Founder</p>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">Tom Alex</h3>
                    <div class="w-full border-t border-gray-300 mt-4"></div>
                    <div class="flex justify-center space-x-4 mt-6">
                        <a href="#" class="text-gray-500 hover:text-blue-500 text-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 text-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-pink-500 text-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-500 text-lg">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 text-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ! Team End --}}
</x-public-layout>
