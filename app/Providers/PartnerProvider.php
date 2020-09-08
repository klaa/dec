<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Partner;
use App\Post;

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
        view()->composer('classic.sidebar', function ($view) {
            $news = Post::with('post_details')->where('category_id','=','3')->latest()->paginate(10);
            $noti = Post::with('post_details')->where('category_id','=','2')->latest()->paginate(10);
            $view->with('news',$news)->with('noti',$noti);
        });
    }
}
