<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Admin\MasterInterface;
use App\Repositories\Admin\MasterRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MasterInterface::class, MasterRepository::class);
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
