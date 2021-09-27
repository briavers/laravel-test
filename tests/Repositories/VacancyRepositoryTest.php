<?php

namespace Tests\Repositories;

use App\Models\Vacancy;
use App\Repositories\Interfaces\VacancyRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VacancyRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testSelectAllSortedPaginated()
    {
        $repository = resolve(VacancyRepositoryInterface::class);
        Vacancy::factory()->count(50)->create();

        $this->assertCount(24,  $repository->selectAllSortedPaginated());
        $this->assertEquals(3,  $repository->selectAllSortedPaginated()->lastPage());
    }

    public function testSave()
    {
        $repository = resolve(VacancyRepositoryInterface::class);
        $vacancy = Vacancy::factory()->make();

        $repository->save($vacancy);

        $this->assertDatabaseCount('vacancies', 1);
    }
}
