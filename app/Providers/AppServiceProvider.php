<?php

namespace App\Providers;

use App\Models\User;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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
        //
        Paginator::useBootstrapFive();


        // \Debugbar::enable(); // only for debugging purpose

       $topUsers=Cache::remember("topUsers",now()->addSeconds(10), function () {
        return User::withCount('likes')
            ->orderBy('likes_count','desc')
            ->limit(5)->get();
       });

    //    Cache::flush();


        View::share('topUsers',$topUsers);
    }
}
