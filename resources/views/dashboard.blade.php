<x-app-layout>
    <div class=" bg-gradient-to-br from-teal-50 to-blue-100 min-h-screen bg-gray-100 p-8">
        <h1 class="text-3xl font-bold mb-8">Selamat Datang, {{ Auth::user()->name }}!
            <p class="text-sm text-gray-400"> Mari mulai perjalanan mengelola sampah dengan lebih baik.</p>
        </h1>


        {{-- Top Stats Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-[#7A5AF8] text-white p-3 rounded-lg">
                <div class="flex items-center text-base justify-start">
                  <span class="mr-2">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.9375 7.9165H14.535C15.0562 7.91658 15.5694 7.78801 16.029 7.54219C16.4886 7.29637 16.8804 6.94091 17.1697 6.50734L18.4553 4.57567C18.7446 4.1421 19.1364 3.78664 19.596 3.54082C20.0556 3.295 20.5688 3.16643 21.09 3.1665H28.196C28.8609 3.16634 29.509 3.37547 30.0483 3.76424C30.5877 4.153 30.9911 4.70169 31.2012 5.3325L32.0625 7.9165M34.4375 7.9165H13.8542" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32.0625 7.9165L31.2708 18.2082M8.3125 7.9165L9.27042 24.5985C9.51425 28.6677 9.63775 30.7038 10.6543 32.1668C11.1562 32.892 11.8037 33.5016 12.5542 33.9608C13.4757 34.5244 14.5873 34.7461 16.2292 34.8332M18.6042 24.5383L20.4028 26.8595C20.7295 25.64 21.4133 24.5459 22.3663 23.7178C23.3193 22.8896 24.4981 22.3652 25.7513 22.2119C27.0045 22.0586 28.2749 22.2833 29.3995 22.8572C30.5241 23.4312 31.4514 24.3281 32.0625 25.4329M34.4375 32.455L32.6388 30.137C32.3147 31.347 31.6391 32.4338 30.6973 33.2598C29.7556 34.0859 28.59 34.6141 27.348 34.7776C26.106 34.9412 24.8434 34.7327 23.7199 34.1787C22.5964 33.6246 21.6625 32.7498 21.0362 31.6649" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                  </span>
                 Total Sampah Dipilah
                </div>
                <div class="text-xl w-full mt-5 text-start bg-white bg-opacity-20 text-white font-bold border-2 border-white p-2 inline-block rounded-md">
                  245kg
                </div>
              </div>

           <div class="bg-[#F95016] text-white p-3 rounded-lg">
            <div class="flex items-center text-base justify-start">
              <!-- Tempat Icon -->
              <span class="mr-2">
                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.561 12.0991L21.093 14.7501C21.4003 15.2823 21.562 15.886 21.5619 16.5005C21.5618 17.1151 21.3999 17.7188 21.0925 18.2509C20.7851 18.783 20.343 19.2248 19.8107 19.5319C19.2783 19.8389 18.6745 20.0004 18.06 20.0001H16V22.0001L11 18.5001L16 15.0001V17.0001H18.062C18.1421 17.0001 18.2211 16.9808 18.2922 16.944C18.3633 16.9071 18.4245 16.8537 18.4707 16.7882C18.5169 16.7227 18.5466 16.6471 18.5575 16.5677C18.5683 16.4883 18.5599 16.4075 18.533 16.3321L18.495 16.2501L16.965 13.5981L19.561 12.0991ZM7.736 9.38407L8.267 15.4641L6.536 14.4641L5.504 16.2501C5.46391 16.3194 5.44109 16.3974 5.43744 16.4775C5.4338 16.5575 5.44945 16.6373 5.48307 16.71C5.51669 16.7828 5.5673 16.8463 5.63064 16.8954C5.69398 16.9445 5.76818 16.9777 5.847 16.9921L5.937 17.0001H9V20.0001H5.937C5.32263 20.0001 4.71909 19.8383 4.18703 19.5311C3.65498 19.2239 3.21316 18.7821 2.90598 18.25C2.5988 17.718 2.43709 17.1144 2.43709 16.5C2.43709 15.8857 2.59882 15.2821 2.906 14.7501L3.938 12.9641L2.205 11.9641L7.736 9.38407ZM13.75 2.97007C14.2815 3.27711 14.723 3.71854 15.03 4.25007L16.061 6.03607L17.794 5.03607L17.262 11.1161L11.732 8.53607L13.462 7.53607L12.432 5.75007C12.392 5.68067 12.3358 5.62192 12.2683 5.57875C12.2009 5.53558 12.124 5.50926 12.0442 5.502C11.9644 5.49475 11.884 5.50678 11.8099 5.53707C11.7357 5.56736 11.6699 5.61503 11.618 5.67607L11.566 5.75007L10.036 8.40207L7.438 6.90207L8.968 4.25007C9.19791 3.85199 9.50398 3.5031 9.86874 3.22333C10.2335 2.94355 10.6498 2.73838 11.0939 2.61951C11.5379 2.50065 12.0011 2.47043 12.4568 2.53058C12.9125 2.59073 13.352 2.74007 13.75 2.97007Z" fill="white"/>
                    </svg>
              </span>
              Sampah Di Daur Ulang
            </div>
            <div class="text-xl w-full mt-5 text-start bg-white bg-opacity-20 text-white font-bold border-2 border-white p-2 inline-block rounded-md">
              102kg
            </div>
          </div>

          <div class="bg-[#1D9C53] text-white p-3 rounded-lg">
            <div class="flex items-center text-base justify-start">
              <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-1.14 1.93-1.14 2.23 0l1.518 5.759a1 1 0 00.95.69h6.039c1.184 0 1.668 1.52.762 2.236l-4.876 3.93a1 1 0 00-.36 1.118l1.518 5.758c.3 1.14-.955 2.078-1.92 1.388l-4.875-3.928a1 1 0 00-1.178 0l-4.875 3.928c-.964.69-2.22-.248-1.92-1.388l1.518-5.758a1 1 0 00-.36-1.118l-4.876-3.93C1.327 10.896 1.81 9.375 2.994 9.375h6.038a1 1 0 00.95-.69l1.518-5.758z"/>
                </svg>
              </span>
                Target Bulanan
            </div>
            <div class="text-xl w-full mt-5 text-start bg-white bg-opacity-20 text-white font-bold border-2 border-white p-2 inline-block rounded-md">
              200kg
            </div>
          </div>
        </div>

        {{-- Charts Section --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-lg font-medium mb-4">Progres Pengelolaan Sampah</h2>
                <canvas id="bar-chart" class="h-64 w-full"></canvas>
            </div>

            <div class="bg-white rounded shadow p-4">
                <h2 class="text-lg font-medium mb-4">Tren Pengurangan Sampah</h2>
                <canvas id="line-chart" class="h-64 w-full"></canvas>
            </div>
        </div>

        {{-- Recent Activities --}}
        <div class="bg-white rounded shadow p-4">
            <h2 class="text-lg font-medium mb-4">Aktivitas Terbaru</h2>
            <div class="space-y-4">
                @foreach ($recentActivities as $activity)
                    <div class="flex items-center justify-between border-b pb-4">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 p-2 rounded-full">
                                {{-- <x-icon name="activity" class="h-4 w-4 text-blue-500" /> --}}
                            </div>
                            <div>
                                <p class="font-medium">{{ $activity['activity'] }}</p>
                                <p class="text-sm text-gray-500">{{ $activity['time'] }}</p>
                            </div>
                        </div>
                        {{-- <x-icon name="chevron-right" class="h-4 w-4 text-gray-400" /> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Include Chart.js --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const barCtx = document.getElementById('bar-chart').getContext('2d');
            const lineCtx = document.getElementById('line-chart').getContext('2d');

            const progressData = @json($progressData);

            // Bar Chart
            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: progressData.map(data => data.bulan),
                    datasets: [
                        {
                            label: 'Sampah Organik',
                            data: progressData.map(data => data.organik),
                            backgroundColor: '#4ade80',
                        },
                        {
                            label: 'Sampah Anorganik',
                            data: progressData.map(data => data.anorganik),
                            backgroundColor: '#60a5fa',
                        },
                    ],
                },
                options: { responsive: true },
            });

            // Line Chart
            new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: progressData.map(data => data.bulan),
                    datasets: [
                        {
                            label: 'Sampah Organik',
                            data: progressData.map(data => data.organik),
                            borderColor: '#4ade80',
                            fill: false,
                        },
                        {
                            label: 'Sampah Anorganik',
                            data: progressData.map(data => data.anorganik),
                            borderColor: '#60a5fa',
                            fill: false,
                        },
                    ],
                },
                options: { responsive: true },
            });
        });
    </script>
</x-app-layout>
