<?php

namespace App\Repositories;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CityRepository implements CityRepositoryInterface
{

    public static function selectAll(): Collection
    {
        return City::all();
    }

    public function insert(City $city)
    {
        $city->save();
    }
}
