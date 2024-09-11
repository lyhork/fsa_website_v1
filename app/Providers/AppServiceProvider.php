<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
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
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
        if (app()->environment('production')) {
            $this->app['request']->server->set('HTTPS', true);
        }
        Paginator::useBootstrapFive();
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en','km']) // also accepts a closure
                ->flags([
                    'km' => asset('km.svg'),
                    'en' => asset('en.svg'),
                ])
                ->circular();
        });

    }
}
