<?php

namespace App\Http\Livewire\Seat;

use App\Models\Cabin;
use App\Models\Seat;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Seat $seat;
  public $cabins = [];


  protected function rules()
  {
    return [
      'seat.quantity' => 'required|numeric|min:1',
      'seat.cabin_id' => 'required|numeric',
      'seat.plan_id' => 'required|numeric',
    ];
  }


  public function mount($seat)
  {
    $this->seat = $seat;
    $this->cabins = Cabin::all();
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->seat->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'seat updated successfully!']);

    return redirect('seat');
  }

  public function render()
  {
    return view('livewire.seat.form');
  }
}
