<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use ArberMustafa\FilamentGoogleCharts\Widgets\PieChartWidget;

class DemoPieChart extends PieChartWidget
{
    protected static ?string $heading = 'Chart';
    
    protected static ?array $options = [
        'legend' => [
            'position' => 'top',
            'alignment' => 'center',
        ],
        'height' => 400,
        'is3D' => false,
    ];

    protected function getData(): array
    {
        return [
            ['Label', 'Aggregate'],
            ['Col1', 7.2],
            ['Col2', 23.7],
            ['Col3', 11.1],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
