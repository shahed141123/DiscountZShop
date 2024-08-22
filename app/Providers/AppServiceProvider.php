<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\Setting;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Division;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Exception;

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
        View::share('setting', null);
        View::share('categories', null);
        View::share('countries', null);
        View::share('divisions', null);
        View::share('citys', null);
        View::share('areas', null);

        try {
            // Check for table existence and set actual values
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('categories')) {
                View::share('categories', Category::with('children')->whereNull('parent_id')->get());
            }
            if (Schema::hasTable('countries')) {
                View::share('countries', Country::orderBy('name','asc')->get());
            }
            if (Schema::hasTable('divisions')) {
                View::share('divisions', Division::orderBy('name','asc')->get());
            }
            if (Schema::hasTable('cities')) {
                View::share('citys', City::orderBy('name','asc')->get());
            }
            if (Schema::hasTable('areas')) {
                View::share('areas', Area::orderBy('name','asc')->get());
            }
        } catch (Exception $e) {
            // Log the exception if needed
        }
        Paginator::useBootstrap();
    }
}
