<div class="flex flex-col min-h-screen">
    <!-- Konten utama Anda di sini -->
    <div class="flex-1"></div>

    <!-- Footer -->
    <footer class="bg-cover bg-center text-white py-8 px-4 md:px-8"
        style="background-image: url('{{ asset('footer.png') }}');">
        <div class="max-w-7xl mx-auto">
            <!-- Logo dan Deskripsi -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-4">Waste <span class="text-[#12D719]">Journey</span></h2>
                <p class="max-w-3xl mx-auto text-sm md:text-base">
                    WasteJourney adalah platform pengelolaan sampah yang membantu rumah tangga dan individu untuk
                    mengelola sampah secara bertanggung jawab. Kami berkomitmen untuk menciptakan masa depan yang lebih
                    bersih dengan menyediakan solusi sederhana untuk daur ulang dan pengelolaan sampah.
                </p>
            </div>

            <!-- Garis Pemisah di bawah deskripsi -->
            <div class="border-t border-white mb-8"></div>

            <!-- Navigasi Links -->
            <nav class="flex flex-wrap justify-center gap-4 mb-8">
                <a href="#" class="hover:text-green-300 transition-colors">Beranda</a>
                <a href="#" class="hover:text-green-300 transition-colors">Tentang</a>
                <a href="#" class="hover:text-green-300 transition-colors">Layanan</a>
                <a href="#" class="hover:text-green-300 transition-colors">Blog</a>
                <a href="#" class="hover:text-green-300 transition-colors">Kontak</a>
                <a href="#" class="hover:text-green-300 transition-colors">Produk</a>
            </nav>

            <!-- Garis Pemisah sebelum Informasi Kontak -->
            <div class="border-t border-[#969595] mb-6"></div>

            <!-- Informasi Kontak -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-center items-center text-center">
                <!-- Email -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center gap-2 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <h3 class="font-semibold">Email Kami</h3>
                    </div>
                    <p class="mt-2">wastejourney@gmail.com</p>
                </div>

                <!-- Alamat -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center gap-2 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="font-semibold">Alamat</h3>
                    </div>
                    <p class="mt-2">Kota Bandung, Jl Cibangkong Lor</p>
                </div>

                <!-- Telepon -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center gap-2 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <h3 class="font-semibold">Kontak Kami</h3>
                    </div>
                    <p class="mt-2">+62 0857 5928 8760</p>
                </div>
            </div>

            <!-- Garis Pemisah di bawah informasi kontak -->
            <div class="border-t border-[#969595] mt-6"></div>

            <!-- Hak Cipta -->
            <div class="text-center mt-6 text-sm">
                <p>&copy;2024 WasteJourney, All Rights Reserved</p>
            </div>
        </div>
    </footer>
</div>
