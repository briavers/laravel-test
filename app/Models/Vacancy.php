<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Vacancy
 *
 * @property int $id
 * @property int $city_id
 * @property int $company_id
 * @property string $title
 * @property string $summary
 * @property string $description
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Company $company
 * @method static \Database\Factories\VacancyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Vacancy extends Model
{
    use HasFactory;

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
