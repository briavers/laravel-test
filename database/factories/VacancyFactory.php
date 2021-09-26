<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        if (City::count() === 0) {
            City::factory()
                ->count(1)
                ->create();
        }

        if (Company::count() === 0) {
            Company::factory()
                ->count(1)
                ->create();
        }

        return [
            'title' => $this->faker->name(),
            'summary' => $this->faker->realText(255),
            'description' => $this->faker->realTextBetween(500, 2000),
            'city_id' => City::inRandomOrder()->first('id')->id,
            'company_id' => Company::inRandomOrder()->first('id')->id,
        ];
    }
}
