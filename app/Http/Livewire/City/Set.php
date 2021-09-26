<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Repositories\Interfaces\CityRepositoryInterface;
use Livewire\Component;

/**
 * This class combines the create and update functionality. Perfect for small basic classes.
 */
class Set extends Component
{

    public City $city;

    protected $rules = [
        'city.name' => 'required|max:255',
        'city.province' => 'required|max:255',
        'city.postal_code' => 'required|max:13',
    ];

    private CityRepositoryInterface $cityRepository;

    /**
     * According to docs this is not needed and DPI should be done in mount(), however it fails to load it in on save()
     * call since mount is only triggered once more detail here https://github.com/livewire/livewire/issues/380.
     * This does make it work like expected.
     *
     * @param null $id
     */
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
