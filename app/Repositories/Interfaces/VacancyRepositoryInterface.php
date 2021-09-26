<?php

namespace App\Repositories\Interfaces;

use App\Models\Vacancy;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface VacancyRepositoryInterface
{
    public function selectAllSortedPaginated(): LengthAwarePaginator;

    public function save(Vacancy $vacancy): void;
}
