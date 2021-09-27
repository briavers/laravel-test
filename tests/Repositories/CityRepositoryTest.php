<?php

namespace Tests\Repositories;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CityRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testInsert()
    {
        $repository = resolve(CityRepositoryInterface::class);
        $city = City::factory()->make();

        $repository->insert($city);

        $this->assertDatabaseCount('cities', 1);
    }

    public function testSelectAll()
    {
        $repository = resolve(CityRepositoryInterface::class);
        City::factory()->count(50)->create();
        
        $this->assertCount(50,  $repository->selectAll());
    }
}
