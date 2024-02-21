<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Post;
use App\Models\Project;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Post', Post::query()->count())
                ->description('All posts from the database')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
                
            Stat::make('Projcts', Project::query()->count())
                ->description('All Projects from the database')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),
                
                
            Stat::make('Events', Event::query()->count())
                ->description('All Events from the database')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

    
    ];
        
        
    }
}
