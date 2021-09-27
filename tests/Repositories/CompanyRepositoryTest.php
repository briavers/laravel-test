<?php

namespace Tests\Repositories;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testSave()
    {
        $repository = resolve(CompanyRepositoryInterface::class);
        $company = Company::factory()->make();

        $repository->save($company);

        $this->assertDatabaseCount('companies', 1);
    }

    public function testSelectAll()
    {
        $repository = resolve(CompanyRepositoryInterface::class);
        Company::factory()->count(50)->create();

        $this->assertCount(50,  $repository->selectAll());
    }
}
