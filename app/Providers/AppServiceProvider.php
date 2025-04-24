<?php

namespace App\Providers;

use App\Models\Roles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        View::composer('*', function ($view) {
            // $arr = explode(',', auth()->user()->role_id);
            // $check = Roles::where('del', 3)->get();
            // foreach ($check as $item) {
            //     foreach ($arr as $items) {
            //         if ($item->id == $items) {
            //             $rolename = $item->name;
            //         }
            //     }
            // }
            // dd($rolename == 'admin_bill');
            $rolename= [];
            View::share(['rolename' => $rolename]);
        });
    }
}
