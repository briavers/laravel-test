<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $cities;

    public function mount(CityRepositoryInterface $cityRepository)
    {
        $this->cities = $cityRepository->selectAll();
    }

    public function render()
    {
        return view('livewire.city.index');
    }

    public function delete(City $city){
        $city->delete();

        return redirect()->route('city-index');
    }
}
