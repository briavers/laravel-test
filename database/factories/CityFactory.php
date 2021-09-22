<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'province' => $this->faker->randomElement([
                'Antwerpen',
                'Henegouwen',
                'Limburg',
                'Luik',
                'Luxemburg',
                'Namen',
                'Oost-Vlaanderen',
                'West-Vlaanderen',
                'Vlaams-Brabant',
                'Waals-Brabant',
                'Brussel',
            ]),
            'postal_code' => $this->faker->postcode(),
        ];
    }
}
