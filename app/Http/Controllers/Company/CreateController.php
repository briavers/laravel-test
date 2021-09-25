<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateController extends Controller
{
    public function __construct(
        public CityRepositoryInterface $cityRepository,
    ) {}

    public function __invoke(Request $request): Factory|View|Application
    {
        $cities = $this->cityRepository->selectAll();

        return view('company.create', compact('cities'));
    }
}
