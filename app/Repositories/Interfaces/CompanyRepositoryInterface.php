<?php

namespace App\Repositories\Interfaces;

use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;

interface CompanyRepositoryInterface
{
    public static function selectAll(?array $joins = null): Collection;

    public function save(Company $city);
}
