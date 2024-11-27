<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-teal-50 to-blue-100 p-6">
            <!-- Eco Hero Header -->
            <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white p-8 text-center">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 mr-4 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"></path>
                    </svg>
                    <h1 class="text-4xl font-extrabold">Statik Pengurangan Sampah</h1>
                </div>
                <p class="text-white/90 text-lg">Transformasikan jejak sampah Anda menjadi aksi positif</p>
            </div>

            <!-- Smart Insights Section -->
            <div class="grid md:grid-cols-3 gap-4 p-6">
                @foreach (['Plastik', 'Organik', 'Elektronik'] as $type)
                <div class="bg-white border-2 border-gray-100 rounded-2xl p-6 transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"></path>
                        </svg>
                        <div class="ml-4">
                            <h3 class="font-bold text-xl text-gray-800">Sampah {{ $type }}</h3>
                            <div class="flex items-center mt-2">
                                <span class="text-3xl font-extrabold text-green-600 mr-3">25%</span>
                                <svg class="text-green-600 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l3 3-3 3m0 0l-3-3 3-3m3 3H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 75%"></div>
                    </div>

                    <div class="mt-4 flex justify-between text-sm text-gray-600">
                        <span>Sisa: 25 kg</span>
                        <span class="font-semibold text-green-600">Kurangi Polusi Laut</span>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Chart Section -->
            <canvas id="ecoImpactChart" class="w-full h-[400px]"></canvas>

            <!-- Eco Achievements Showcase -->
            <div class="bg-gradient-to-r from-green-100 to-blue-100 p-8 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">🌍 Pencapaian Eco Anda</h2>
                <div class="flex justify-center space-x-8">
                    <div class="bg-white p-6 rounded-2xl shadow-lg transform transition-all hover:scale-105">
                        <svg class="w-20 h-20 text-yellow-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Pengurangan Sampah Plastik</h3>
                        <span class="text-lg font-bold text-green-600">Master Eco Warrior</span>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg transform transition-all hover:scale-105">
                        <svg class="w-20 h-20 text-green-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Daur Ulang Organik</h3>
                        <span class="text-lg font-bold text-green-600">Green Champion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('ecoImpactChart').getContext('2d');
        const ecoImpactChart = new Chart(ctx, {
            type: 'line', // Ubah ke 'bar', 'radar', dll sesuai kebutuhan
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                datasets: [
                    {
                        label: 'Sampah Plastik',
                        data: [30, 20, 50, 40, 80, 60],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        tension: 0.4
                    },
                    {
                        label: 'Sampah Organik',
                        data: [20, 50, 30, 80, 60, 90],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            borderDash: [5, 5]
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
