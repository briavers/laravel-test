<?php

namespace App\Models;

use Database\Factories\VacancyFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read City $city
 * @property-read Company $company
 * @method static VacancyFactory factory(...$parameters)
 * @method static Builder|Vacancy newModelQuery()
 * @method static Builder|Vacancy newQuery()
 * @method static Builder|Vacancy query()
 * @method static Builder|Vacancy whereCityId($value)
 * @method static Builder|Vacancy whereCompanyId($value)
 * @method static Builder|Vacancy whereCreatedAt($value)
 * @method static Builder|Vacancy whereDescription($value)
 * @method static Builder|Vacancy whereId($value)
 * @method static Builder|Vacancy whereSummary($value)
 * @method static Builder|Vacancy whereTitle($value)
 * @method static Builder|Vacancy whereType($value)
 * @method static Builder|Vacancy whereUpdatedAt($value)
 * @mixin Eloquent
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
