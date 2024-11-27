{{-- Top Info Bar --}}
<div class="bg-[#002E1F] text-white py-3">
    <div class="container mx-auto px-8">
        <div class="hidden lg:flex justify-between items-center text-sm">
            <div class="flex items-center space-x-8">
                <div class="flex items-center">
                    <i class="far fa-clock mr-3 text-[#3A9E1E] animate__animated animate__fadeIn"></i>
                    <span>8:00AM - 5:00PM</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-phone mr-3 text-[#3A9E1E] animate__animated animate__fadeIn"></i>
                    <span>+62 0857 5928 8760</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-envelope mr-3 text-[#3A9E1E] animate__animated animate__fadeIn"></i>
                    <span>wastejourney@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt mr-3 text-[#3A9E1E] animate__animated animate__fadeIn"></i>
                    <span>Jl. Cibankong, Kota Bandung, Jawa Barat</span>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-[#3A9E1E] animate__animated animate__fadeIn"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-gray-200 animate__animated animate__fadeIn"><i
                        class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-gray-200 animate__animated animate__fadeIn"><i
                        class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-gray-200 animate__animated animate__fadeIn"><i
                        class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-gray-200 animate__animated animate__fadeIn"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

{{-- Main Navigation --}}
<nav class="bg-[#2E7D32] text-white py-2 sticky top-0 z-50 transition-all duration-300 ease-in-out" id="navbar">
    <div class="container mx-auto px-4">
        <div class="relative flex items-center justify-between py-4">
            {{-- Logo --}}
            <div class="text-xl font-bold">
                <a href="/">
                    <span class="text-white">Waste</span><span class="text-[#12D719]">Journey</span>
                </a>
            </div>

            {{-- Desktop Menu (Centered) --}}
            <div class="hidden lg:flex items-center space-x-8 absolute inset-x-0 mx-auto w-max">
                <a href="/" id="home" class="menu-item group relative py-2 text-white hover:text-[#12D719]">
                    Beranda
                    <span class="absolute bottom-0 left-0 block w-0 h-1 bg-[#12D719] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/tentang" id="about" class="menu-item group relative py-2 text-white hover:text-[#12D719]">
                    Tentang
                    <span class="absolute bottom-0 left-0 block w-0 h-1 bg-[#12D719] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/blog" id="blog" class="menu-item group relative py-2 text-white hover:text-[#12D719]">
                    Blog
                    <span class="absolute bottom-0 left-0 block w-0 h-1 bg-[#12D719] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/kontak" id="contact" class="menu-item group relative py-2 text-white hover:text-[#12D719]">
                    Kontak
                    <span class="absolute bottom-0 left-0 block w-0 h-1 bg-[#12D719] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/produk" id="products" class="menu-item group relative py-2 text-white hover:text-[#12D719]">
                    Produk
                    <span class="absolute bottom-0 left-0 block w-0 h-1 bg-[#12D719] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            {{-- Button Bergabung --}}
            <div class="hidden lg:flex">
                <a href="/login" id="join" class="px-6 py-2 bg-[#12D719] text-white font-bold rounded-lg hover:bg-green-700 transition-all duration-300">
                    Bergabung
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
            <a href="/" class="block py-2 hover:text-gray-200">Beranda</a>
            <a href="/tentang" class="block py-2 hover:text-gray-200">Tentang</a>
            <a href="/layanan" class="block py-2 hover:text-gray-200">Layanan</a>
            <a href="/blog" class="block py-2 hover:text-gray-200">Blog</a>
            <a href="/kontak" class="block py-2 hover:text-gray-200">Kontak</a>
            <a href="/produk" class="block py-2 hover:text-gray-200">Produk</a>
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

    // Adding a scroll effect to navbar
    window.onscroll = function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 10) {
            navbar.classList.add('bg-[#1b5e20]', 'shadow-lg');
        } else {
            navbar.classList.remove('bg-[#1b5e20]', 'shadow-lg');
        }
    };

    // Function to add active class to the current menu item based on the URL
    window.addEventListener('DOMContentLoaded', () => {
        const path = window.location.pathname;
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            const link = item.getAttribute('href');
            if (path === link) {
                item.classList.add('text-[#12D719]', 'font-bold');
                item.querySelector('span').classList.add('w-full');
            } else {
                item.classList.remove('text-[#12D719]', 'font-bold');
                item.querySelector('span').classList.remove('w-full');
            }
        });
    });
</script>
