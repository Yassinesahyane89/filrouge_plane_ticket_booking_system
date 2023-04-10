<?php

namespace App\Http\Livewire\Airport;

use App\Models\Airport;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Airport $airport;
  public $cities = [];

  protected function rules()
  {
    return [
      'airport.name' => 'required|min:6',
      'airport.city_id' => 'required',
    ];
  }


  public function mount($airport)
  {
    $this->airport = $airport;
    $this->cities = City::all();
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->airport->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'airport updated successfully!']);

    return redirect('airport');
  }

  public function render()
  {
    return view('livewire.airport.form');
  }
}
