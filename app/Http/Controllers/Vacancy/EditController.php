<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Enums\VacancyTypeEnum;
use App\Models\Vacancy;
use App\Repositories\CompanyRepository;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __construct(
        public CityRepositoryInterface $cityRepository,
        public CompanyRepositoryInterface $companyRepository,
    ) {}

    public function __invoke(Vacancy $vacancy): Factory|View|Application
    {
        $cities = $this->cityRepository->selectAll();
        $companies = $this->companyRepository->selectAll();
        $types = VacancyTypeEnum::getOptions();

        return view('vacancy.edit')
        ->with('vacancy', $vacancy)
        ->with('cities', $cities)
        ->with('companies', $companies)
        ->with('types', $types);
    }
}
