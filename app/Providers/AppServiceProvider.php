<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LineService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LineService::class, function () {
            return new LineService(
                config('line.access_token'),
                config('line.channel_secret')
            );
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
