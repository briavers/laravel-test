<?php

namespace App\Repositories;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Support\Collection;

class CityRepository implements CityRepositoryInterface
{

    public static function selectAll(): Collection
    {
        return City::orderBy('name')->get();
    }

    public function insert(City $city)
    {
        $city->save();
    }
}
