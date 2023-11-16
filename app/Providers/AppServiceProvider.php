<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades;
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
        Facades\View::composer('*', function (View $view) {
            $setting = Setting::all()->keyBy("key");
            $view->with('setting', $setting);
        });
    }
}
