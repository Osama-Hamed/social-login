<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SocialAuthService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SocialAuthService::class, function ($app) {
            return new SocialAuthService($this->app->request->provider);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
