<?php

namespace App\Http\Requests;

use App\Models\Enums\VacancyTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'city_id' => 'required|integer',
            'company_id' => 'required|integer',
            'type' => ['required', Rule::in(VacancyTypeEnum::getOptions())],
        ];
    }
}
