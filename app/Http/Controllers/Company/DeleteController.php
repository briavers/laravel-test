<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends Controller
{

    public function __invoke(Request $request, Company $company): RedirectResponse
    {
        $company->delete();

        return redirect()->route('company-index');
    }
}
