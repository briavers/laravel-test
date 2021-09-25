<?php

namespace App\Http\Livewire\City;

use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    private CityRepositoryInterface $cityRepository;
    public Collection $cities;

    public function mount(CityRepositoryInterface $cityRepository)
    {
        $this->cities = $cityRepository->selectAll();
    }

    public function render()
    {
        return view('livewire.city.index');
    }
}
