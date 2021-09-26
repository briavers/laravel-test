<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        return view('vacancy.show', compact('vacancy'));
    }
}
