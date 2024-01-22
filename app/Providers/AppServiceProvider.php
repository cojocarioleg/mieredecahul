<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Network;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;


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
        View::composer('layouts/header', function ($view) {

            $view->with('categories', Category::withTranslations()->get());
        });

        View::composer('layouts/socials', function ($view) {

            $view->with('socials', Network::orderBy('id', 'DESC')->get());
        });

        View::composer('layouts/header', function ($cart) {

            $sessionId = Session::getId();
            \Cart::session($sessionId);

            $cart->with('cart',  \Cart::getContent());

        });
    }
}
