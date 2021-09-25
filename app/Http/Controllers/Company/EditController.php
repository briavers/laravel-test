<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __construct(
        public CityRepositoryInterface $cityRepository,
    ) {}

    public function __invoke(Company $company): Factory|View|Application
    {
        $cities = $this->cityRepository->selectAll();

        return view('company.edit')
        ->with('company', $company)
        ->with('cities', $cities);
    }
}
