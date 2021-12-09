<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
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
        // heryerde kullanılabilir
        view()->composer('*', \App\Http\ViewComposers\Categories::class);
        view()->composer('*', \App\Http\ViewComposers\SocialMedia::class);

    }
}
