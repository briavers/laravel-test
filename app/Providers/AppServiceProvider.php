<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Support\ServiceProvider;

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
        $this->bindRepositories();
    }

    /**
     * @return void
     */
    private function bindRepositories(): void
    {
        $this->app->bind(
            CityRepositoryInterface::class,
            CityRepository::class
        );
    }
}
