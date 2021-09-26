<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\VacancyRequest;
use App\Models\Vacancy;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PutController extends Controller
{
    public function __construct(
        public VacancyRepositoryInterface $vacancyRepository,
    ) {}

    public function __invoke(VacancyRequest $request, Vacancy $vacancy): RedirectResponse
    {
        $vacancy->title = $request->input('title');
        $vacancy->summary = $request->input('summary');
        $vacancy->description = $request->input('description');
        $vacancy->city_id = $request->input('city_id');
        $vacancy->company_id = $request->input('company_id');
        $vacancy->type = $request->input('type');

        $this->vacancyRepository->save($vacancy);

        return redirect()->route('vacancy-show', ['vacancy' => $vacancy]);
    }
}
