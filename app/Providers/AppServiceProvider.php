<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
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


            Facades\View::composer('*', function (View $view) {
                if ( Facades\Auth::check()){
                $credit = Auth::user()->credit;
                $view->with('credit', $credit);
                }
            });
        Facades\View::composer('*', function (View $view) {
            if ( Facades\Auth::check()){
                $user =User::where("id",Auth::id())->first();
                $view->with('user', $user);
            }
        });
        Facades\View::composer('*', function (View $view) {
            if ( Facades\Auth::check()){
                $profile =Profile::where("user_id",Auth::id())->first();
                $view->with('profile', $profile);
            }
        });

    }
}
