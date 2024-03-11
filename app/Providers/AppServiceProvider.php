<?php

namespace App\Providers;

use App\Models\UserInfo;
use App\Observers\UserInfoObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::defaultView('default');
 
        Paginator::defaultSimpleView('default');

        Paginator::useTailwind();
    }
}
