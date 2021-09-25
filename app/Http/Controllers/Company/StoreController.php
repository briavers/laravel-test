<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    public function __construct(
        public CompanyRepositoryInterface $companyRepository,
    ) {}

    public function __invoke(CompanyRequest $request): RedirectResponse
    {
        $company = new Company();
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->city_id = $request->input('city_id');

        $this->companyRepository->save($company);

        return redirect()->route('company-index');
    }
}
