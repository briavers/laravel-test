<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{

    public function __construct(
      public CompanyRepositoryInterface $companyRepository,
    ) {}


    public function __invoke(Request $request): Factory|View|Application
    {
        $companies = $this->companyRepository->selectAll(['city']);

        return view('company.index', compact('companies'));
    }
}
