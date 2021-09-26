<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateController extends Controller
{
    public function __construct(
        public CityRepositoryInterface $cityRepository,
        public CompanyRepositoryInterface $companyRepository,
    ) {}

    public function __invoke(Request $request): Factory|View|Application
    {
        $cities = $this->cityRepository->selectAll();
        $companies = $this->companyRepository->selectAll();

        return view('vacancy.create')
            ->with('cities', $cities)
            ->with('companies', $companies);
    }
}
