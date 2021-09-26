<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\VacancyRequest;
use App\Models\Vacancy;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    public function __construct(
        public VacancyRepositoryInterface $vacancyRepository,
    ) {}

    public function __invoke(VacancyRequest $request): RedirectResponse
    {
        $vacancy = new Vacancy();
        $vacancy->title = $request->input('title');
        $vacancy->summary = $request->input('summary');
        $vacancy->description = $request->input('description');
        $vacancy->city_id = $request->input('city_id');
        $vacancy->company_id = $request->input('company_id');
        $vacancy->type = $request->input('type');

        $this->vacancyRepository->save($vacancy);

        return redirect()->route('vacancy-index');
    }
}
