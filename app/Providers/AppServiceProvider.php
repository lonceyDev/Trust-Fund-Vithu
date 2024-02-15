<?php

namespace App\Providers;


use Filament\Facades\Filament;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        Paginator::useBootstrapFive();
        
            Filament::registerNavigationItems([
                NavigationItem::make('Website')
                    ->url('https://vtf.lonceybiz.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->group('Vithu Trust')
                    ->sort(3),
            ]);
            
      
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
    
}
