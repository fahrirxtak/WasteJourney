<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EcoImpactController extends Controller
{
    public function index(): View
    {
        $wasteData = [
            ['month' => 'Jan', 'plastik' => 50, 'organik' => 30, 'kertas' => 20, 'elektronik' => 10],
            ['month' => 'Feb', 'plastik' => 45, 'organik' => 35, 'kertas' => 18, 'elektronik' => 8],
            ['month' => 'Mar', 'plastik' => 40, 'organik' => 42, 'kertas' => 15, 'elektronik' => 7],
            ['month' => 'Apr', 'plastik' => 35, 'organik' => 48, 'kertas' => 12, 'elektronik' => 5],
        ];

        $achievements = $this->calculateAchievements($wasteData);
        $ecoAchievements = $this->getEcoAchievements();

        return view('user.eco-impact', [
            'wasteData' => $wasteData,
            'achievements' => $achievements,
            'ecoAchievements' => $ecoAchievements
        ]);
    }

    private function calculateAchievements(array $wasteData): array
    {
        $latestMonth = end($wasteData);
        $firstMonth = $wasteData[0];

        return [
            [
                'type' => 'Plastik',
                'current' => $latestMonth['plastik'],
                'reduction' => round(($firstMonth['plastik'] - $latestMonth['plastik']) / $firstMonth['plastik'] * 100),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                'progressColor' => 'bg-blue-500',
                'impact' => 'Kurangi Polusi Laut'
            ],
            [
                'type' => 'Organik',
                'current' => $latestMonth['organik'],
                'reduction' => round(($firstMonth['organik'] - $latestMonth['organik']) / $firstMonth['organik'] * 100),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.16 6.34a5 5 0 1 0 5.66 8.5"></path></svg>',
                'progressColor' => 'bg-green-500',
                'impact' => 'Dukung Kompos'
            ],
            [
                'type' => 'Elektronik',
                'current' => $latestMonth['elektronik'],
                'reduction' => round(($firstMonth['elektronik'] - $latestMonth['elektronik']) / $firstMonth['elektronik'] * 100),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-purple-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg>',
                'progressColor' => 'bg-purple-500',
                'impact' => 'Kurangi Limbah B3'
            ]
        ];
    }

    private function getEcoAchievements(): array
    {
        return [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-yellow-500 mx-auto mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="14 2 18 6 7 19 3 15 14 2"></polygon><line x1="3" y1="20" x2="21" y2="20"></line></svg>',
                'title' => 'Pengurangan Sampah Plastik',
                'level' => 'Master Eco Warrior'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-green-500 mx-auto mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
                'title' => 'Daur Ulang Organik',
                'level' => 'Green Champion'
            ]
        ];
    }
}
