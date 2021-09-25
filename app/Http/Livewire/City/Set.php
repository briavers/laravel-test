<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Livewire\Component;

class Set extends Component
{

    public City $city;

    protected $rules = [
        'city.name' => 'required|max:255',
        'city.province' => 'required|max:255',
        'city.postal_code' => 'required|max:13',
    ];

    private CityRepositoryInterface $cityRepository;

    public function __construct($id = null)
    {
        $this->cityRepository = resolve(CityRepositoryInterface::class);

        parent::__construct($id);
    }

    public function mount(?City $city)
    {
        $this->city = $city ?? new City();
    }


    public function render()
    {
        return view('livewire.city.set');
    }

    public function submit()
    {
        $this->validate();

        $this->cityRepository->insert($this->city);

        return redirect()->route('city-index');
    }
}
