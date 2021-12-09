<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Redirect;

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
        // Set the app locale according to the URL
        app()->setLocale((request()->segment(1) ?: config('app.fallback_locale')));

        Blade::include('_partials.multilinguals.multilingual', 'multilingual');
        Blade::include('_partials.multilinguals.multilingual_list', 'multilingualList');

        Redirect::macro('success', function ($route, $routeParams = [], $message = "İşlem başarıyla tamamlandı") {
            return redirect()
                ->route($route, $routeParams)
                ->with('success_message', $message);
        });

        Redirect::macro('error', function ($route, $routeParams = [], $message = "İşlemler sırasında bir sorun oluştu!") {
            return redirect()
                ->route($route, $routeParams)
                ->with('error_message', $message);
        });

        Route::model('social_medium', \App\SocialMedia::class);

        Carbon::setToStringFormat('d.m.Y H:i:s');
    }
}
