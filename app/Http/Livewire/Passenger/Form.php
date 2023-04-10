<?php

namespace App\Http\Livewire\Passenger;

use App\Models\Passenger;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Passenger $passenger;

  protected function rules()
  {
    return [
      'passenger.name' => 'required|min:6',
      'passenger.email' => ['required', 'email', 'unique:passengers,email,' . $this->passenger->id],
      'passenger.phone' => 'required|numeric|digits:10',
    ];
  }


  public function mount($passenger)
  {
    $this->passenger = $passenger;
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->passenger->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'passenger updated successfully!']);

    return redirect('passenger');
  }

  public function render()
  {
    return view('livewire.passenger.form');
  }
}
