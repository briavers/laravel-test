<?php

namespace App\Repositories;

use App\Models\Vacancy;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class VacancyRepository implements VacancyRepositoryInterface
{

    public function selectAllSortedPaginated(): LengthAwarePaginator
    {
        // Paginate at 24 (common divider) to avoid updating CSS from grid to flexbox to get good layout.
        return Vacancy::orderByDesc('id')
            ->Paginate(24);
    }

    public function save(Vacancy $vacancy): void
    {
        $vacancy->save();
    }
}
