<?php

namespace App\Http\Livewire\Plan;

use App\Models\Cabin;
use App\Models\Plan;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Plan $plan;
  public $seats = [];
  public $cabins = [];

  protected function rules()
  {
    return [
      'plan.number' => 'required|min:6',
      'seats.*.price' => 'required|numeric',
      'seats.*.quantity' => 'required|numeric',
      'seats.*.cabin_id' => 'required|numeric',
    ];
  }

  public function addSeat()
  {
    $this->seats[] = [
      'price' => 1,
      'quantity' => 1,
    ];
  }

  public function remove($index)
  {
    unset($this->seats[$index]);
    $this->seats = array_values($this->seats);
  }

  public function mount($plan)
  {
    $this->plan = $plan;

    $this->seats = $plan->seat->toArray();

    $this->cabins = Cabin::all();

    if (count($this->seats) == 0) {
      $this->addSeat();
    }
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->plan->save();

    $this->plan->seat()->delete();

    foreach ($this->seats as $seat) {
      $this->plan->seat()->create([
        'price' => $seat['price'],
        'quantity' => $seat['quantity'],
        'cabin_id' => $seat['cabin_id'],
      ]);
    }

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'plan updated successfully!']);

    return redirect('plan');
  }

  public function render()
  {
    return view('livewire.plan.form');
  }
}
