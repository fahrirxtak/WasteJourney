{{-- resources/views/layouts/navbar.blade.php --}}

{{-- Top Info Bar --}}
<div class="bg-gradient-to-r from-[#4267B2]  to-[#B6D5F0] text-white py-3">
    <div class="container mx-auto px-8">
        <div class="hidden lg:flex justify-between items-center text-sm">
            <div class="flex items-center space-x-8">
                <div class="flex items-center">
                    <i class="far fa-clock mr-3"></i>
                    <span>8:00AM - 5:00PM</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-phone mr-3"></i>
                    <span>+62 0857 5928 8760</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-envelope mr-3"></i>
                    <span>wastejourney@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt mr-3"></i>
                    <span>Jl. Cibankong, Kota Bandung, Jawa Barat</span>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-gray-200"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-gray-200"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>


{{-- Main Navigation --}}
<nav class="bg-[#2E7D32] text-white py-2">
    <div class="container mx-auto px-4">
        <div class="relative flex justify-between items-center py-4">
            {{-- Logo --}}
            <div class="absolute left-4 text-xl font-bold">
                <a href="/">
                    <span class="text-white">Waste</span><span class="text-[#12D719]">Journey</span>
                </a>
            </div>

            {{-- Desktop Menu (Perfectly Centered) --}}
            <div class="hidden lg:flex mx-auto justify-center items-center space-x-8">
                <a href="#" class="hover:text-gray-200">Beranda</a>
                <a href="#" class="hover:text-gray-200">Tentang</a>
                <a href="#" class="hover:text-gray-200">Layanan</a>
                <a href="#" class="hover:text-gray-200">Blog</a>
                <a href="#" class="hover:text-gray-200">Kontak</a>
                <a href="#" class="hover:text-gray-200">Produk</a>
            </div>

            {{-- Subscribe Button --}}
            <div class="hidden lg:block absolute right-4">
                <a href="#" class="bg-white text-[#2E7D32] px-4 py-2 rounded-md hover:bg-gray-100">
                    Berlangganan Sekarang
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="lg:hidden absolute right-4">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden lg:hidden pb-4">
            <a href="#" class="block py-2 hover:text-gray-200">Beranda</a>
            <a href="#" class="block py-2 hover:text-gray-200">Tentang</a>
            <a href="#" class="block py-2 hover:text-gray-200">Layanan</a>
            <a href="#" class="block py-2 hover:text-gray-200">Blog</a>
            <a href="#" class="block py-2 hover:text-gray-200">Kontak</a>
            <a href="#" class="block py-2 hover:text-gray-200">Produk</a>
            <a href="#" class="inline-block bg-white text-[#2E7D32] px-4 py-2 rounded-md hover:bg-gray-100 mt-2">
                Berlangganan Sekarang
            </a>
        </div>
    </div>
</nav>

{{-- JavaScript for Mobile Menu Toggle --}}
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
