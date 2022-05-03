<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Ori;
use App\Repositories\GetRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Ori::class, GetRepository::class);

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
