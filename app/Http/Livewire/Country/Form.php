<?php

namespace App\Http\Livewire\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Country $country;

  protected function rules()
  {
    return [
      'country.name' => 'required|min:6',
    ];
  }


  public function mount($country)
  {
    $this->country = $country;
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->country->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'country updated successfully!']);

    return redirect('country');
  }

  public function render()
  {
    return view('livewire.country.form');
  }
}
