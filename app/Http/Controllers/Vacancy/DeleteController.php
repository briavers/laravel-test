<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends Controller
{

    public function __invoke(Request $request, Vacancy $vacancy): RedirectResponse
    {
        $vacancy->delete();

        return redirect()->route('vacancy-index');
    }
}
