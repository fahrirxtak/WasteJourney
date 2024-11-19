<x-guest-layout>
    <div class="w-full md:w-full md:mt-0 md:ml-8 ">
        <iframe class="w-full h-64 rounded-md"
            src="https://maps.google.com/maps?q=Jl.%20Cibangkong%20Lor,%20Kota%20Bandung,%20Jawa%20Barat&output=embed"
            frameborder="0" allowfullscreen>
        </iframe>
    </div>
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Map Section -->
            <div id="map" class="h-96 w-full mb-8 rounded-lg shadow-md"></div> <!-- Peta -->

            <div class="lg:flex lg:gap-8"> <!-- Tambahkan gap untuk jarak antar kolom -->
                <!-- Left Column - Contact Info -->
                <div class="p-8 bg-gray-900 text-white lg:w-1/3">
                    <!-- Informasi Kontak -->
                    <div>
                        <h2 class="text-2xl font-bold mb-6 text-black">Temukan Kantor Kami</h2>
                        <p class="mb-8 text-gray-400">
                            Menyediakan Layanan Pengumpulan Sampah Secara Rutin Pada Waktu Terjadwal
                        </p>
                    </div>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 mr-3 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-black">Lokasi</h3>
                                <p class="mt-1 text-gray-400">jl. cibangkong lor, kota bandung, jawa barat</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 mr-3 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-black">No.Telepon</h3>
                                <p class="mt-1 text-gray-400">+6285759288760</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 mr-3 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-black">Email</h3>
                                <p class="mt-1 text-gray-400">wastejourney@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="p-8 lg:w-2/3 bg-gray-50 rounded-lg">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">KIRIM PESAN</h2>
                        <p class="text-gray-600 mb-8">
                            Kami siap membantu Anda dengan pertanyaan seputar layanan pengelolaan sampah. Jangan ragu
                            untuk menghubungi kami!
                        </p>
                    </div>

                    <form action="" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">
                                    Nama
                                </label>
                                <input type="text" id="nama" name="nama"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="nama_belakang" class="block text-sm font-medium text-gray-700">
                                    Nama Belakang
                                </label>
                                <input type="text" id="nama_belakang" name="nama_belakang"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Alamat Email
                                </label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="telepon" class="block text-sm font-medium text-gray-700">
                                    No. Telepon
                                </label>
                                <input type="tel" id="telepon" name="telepon"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="pertanyaan" class="block text-sm font-medium text-gray-700">
                                Apa Pertanyaan Anda?
                            </label>
                            <textarea id="pertanyaan" name="pertanyaan" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm"></textarea>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 ">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
