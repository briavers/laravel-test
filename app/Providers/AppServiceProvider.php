<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use App\Repositories\VacancyRepository;
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
        $this->app->bind(
            CompanyRepositoryInterface::class,
            CompanyRepository::class
        );
        $this->app->bind(
            VacancyRepositoryInterface::class,
            VacancyRepository::class
        );
    }
}
