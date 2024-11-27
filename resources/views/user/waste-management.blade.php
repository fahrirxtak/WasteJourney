<x-app-layout>
    <div class=" bg-gradient-to-br from-teal-50 to-blue-100 min-h-screen  p-4 md:p-8 flex items-center justify-center">
        <div class="container mx-auto w-full max-w-full px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Form Input -->
                <div class="bg-white shadow-2xl rounded-3xl p-6 md:p-8 transform transition lg:col-span-2">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-green-700 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Pengelolaan Sampah Pintar
                    </h2>

                    <div class="space-y-6">
                        <!-- Waste Type Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Sampah</label>
                            <div class="grid grid-cols-3 gap-3" x-data="{ selectedWasteType: null }">
                                <button
                                    @click="selectedWasteType = 'organic'"
                                    :class="selectedWasteType === 'organic' ? 'border-green-500 bg-green-100 text-green-700' : 'border-gray-200 hover:bg-gray-50'"
                                    class="p-3 rounded-lg border-2 transition flex flex-col items-center"
                                >
                                    <span class="text-3xl mb-2">🍎</span>
                                    <span class="text-sm text-center">Sampah Organik</span>
                                </button>
                                <button
                                    @click="selectedWasteType = 'plastic'"
                                    :class="selectedWasteType === 'plastic' ? 'border-blue-500 bg-blue-100 text-blue-700' : 'border-gray-200 hover:bg-gray-50'"
                                    class="p-3 rounded-lg border-2 transition flex flex-col items-center"
                                >
                                    <span class="text-3xl mb-2">♻️</span>
                                    <span class="text-sm text-center">Sampah Plastik</span>
                                </button>
                                <button
                                    @click="selectedWasteType = 'paper'"
                                    :class="selectedWasteType === 'paper' ? 'border-purple-500 bg-purple-100 text-purple-700' : 'border-gray-200 hover:bg-gray-50'"
                                    class="p-3 rounded-lg border-2 transition flex flex-col items-center"
                                >
                                    <span class="text-3xl mb-2">📄</span>
                                    <span class="text-sm text-center">Sampah Kertas</span>
                                </button>
                            </div>
                        </div>

                        <!-- Management Method Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Metode Pengelolaan</label>
                            <div class="grid grid-cols-2 gap-3" x-data="{ selectedMethod: null }">
                                <div
                                    @click="selectedMethod = 'composting'"
                                    :class="selectedMethod === 'composting' ? 'border-blue-500 bg-blue-100 text-blue-700' : 'border-gray-200 hover:bg-gray-50'"
                                    class="p-4 rounded-lg border-2 cursor-pointer transition"
                                >
                                    <h3 class="font-semibold text-center">Komposting</h3>
                                    <p class="text-xs text-gray-600 text-center mt-1">Mengubah sampah organik menjadi pupuk</p>
                                </div>
                                <div
                                    @click="selectedMethod = 'biogas'"
                                    :class="selectedMethod === 'biogas' ? 'border-green-500 bg-green-100 text-green-700' : 'border-gray-200 hover:bg-gray-50'"
                                    class="p-4 rounded-lg border-2 cursor-pointer transition"
                                >
                                    <h3 class="font-semibold text-center">Produksi Biogas</h3>
                                    <p class="text-xs text-gray-500 text-center mt-1">Menghasilkan energi dari sampah organik</p>
                                </div>
                            </div>
                        </div>

                        <!-- Waste Weight Input -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Berat Sampah (kg)</label>
                            <input
                                type="number"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-400 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                placeholder="Masukkan berat sampah"
                            />
                        </div>

                        <!-- Calculate Button -->
                        <button
                            class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-300 flex items-center justify-center space-x-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span>Hitung Dampak Lingkungan</span>
                        </button>
                    </div>
                </div>

                <!-- Recommendations Section -->
                <div class="bg-white shadow-2xl rounded-3xl p-6 md:p-8 transform transition">
                    <h3 class="text-2xl font-bold mb-6 text-green-700 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Rekomendasi Pengelolaan
                    </h3>

                    <div class="space-y-4">
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800 mb-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Metode Optimal
                            </h4>
                            <p class="text-sm text-gray-700">Pilih komposting untuk sampah organik untuk mendapatkan pupuk berkualitas</p>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Tips Pengurangan
                            </h4>
                            <ul class="text-sm text-gray-700 list-disc list-inside">
                                <li>Pisahkan sampah sebelum dibuang</li>
                                <li>Gunakan kemasan yang dapat didaur ulang</li>
                                <li>Kurangi penggunaan plastik sekali pakai</li>
                            </ul>
                        </div>

                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-yellow-800 mb-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                Pertimbangkan Lebih Lanjut
                            </h4>
                            <p class="text-sm text-gray-700">Pertimbangkan daur ulang atau pengurangan sampah di sumber</p>
                        </div>
                    </div>
                </div>

                <!-- Calculation Results -->
                <div class="bg-white shadow-2xl rounded-3xl p-6 md:p-8 flex flex-col justify-center items-center lg:col-span-2">
                    <h3 class="text-2xl font-bold mb-6 text-blue-700 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Hasil Perhitungan
                    </h3>

                    <div class="w-full max-w-md mx-auto">
                        <div class="bg-gray-100 rounded-2xl p-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Belum Ada Perhitungan</h4>
                            <p class="text-sm text-gray-500">
                                Masukkan detail sampah dan pilih metode pengelolaan untuk melihat dampak lingkungan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
