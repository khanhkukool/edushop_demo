<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categories;
use App\Detail_categories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts/main',function ($view){
           $categories = Categories::all();
//           $detail_categories = Detail_categories::all();
           $view->with('categories',$categories);
        });
        view()->composer('layouts/main',function ($view){
            $detail_categories = Detail_categories::all();
            $view->with('detail_categories',$detail_categories);
        });
    }
}
