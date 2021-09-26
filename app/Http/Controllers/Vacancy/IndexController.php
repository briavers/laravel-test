<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{

    public function __construct(
      public VacancyRepositoryInterface $vacancyRepository,
    ) {}


    public function __invoke(Request $request): Factory|View|Application
    {
        $vacancies = $this->vacancyRepository->selectAllSortedPaginated();

        return view('vacancy.index', compact('vacancies'));
    }
}
