<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Partner;

class PartnerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('classic.doitac', function ($view) {
            $doitac = Partner::where('published',1)->get();
            $view->with('doitac',$doitac);
        });
    }
}
