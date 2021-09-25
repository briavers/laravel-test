<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\Company;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository implements CompanyRepositoryInterface
{

    public static function selectAll(?array $joins): Collection
    {
        $companies = Company::query();
        if($joins){
            $companies->with($joins);
        }

        return $companies->get();
    }

    public function save(Company $company)
    {
        $company->save();
    }
}
