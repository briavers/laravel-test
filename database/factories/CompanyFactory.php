<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

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

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(255),
            'city_id' => City::inRandomOrder()->first('id')->id,
        ];
    }
}
