<?php

namespace App\Repositories\Interfaces;

use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

interface CityRepositoryInterface
{
    public static function selectAll(): Collection;

    public function insert(City $city);
}
