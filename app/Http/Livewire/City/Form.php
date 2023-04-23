<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public City $city;
  public $countries = [];

  protected function rules()
  {
    return [
      'city.name' => 'required|min:3',
      'city.country_id' => 'required',
    ];
  }


  public function mount($city)
  {
    $this->city = $city;
    $this->countries = Country::all();
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->city->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'city updated successfully!']);

    return redirect('dashboard/city');
  }

  public function render()
  {
    return view('livewire.city.form');
  }
}
