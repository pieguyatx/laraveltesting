<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Avoid problems with older SQL
        // https://laravel-news.com/laravel-5-4-key-too-long-error
        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the Twitter api key into Laravel service container
        $this->app->singleton(Twitter::class,function(){
            return new Twitter('api-key-goes-here-through-config');
            // return new Twitter(config('services.twitter.key'));
        });
    }
}
