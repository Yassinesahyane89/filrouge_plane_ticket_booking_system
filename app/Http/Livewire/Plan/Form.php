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
  public $selectedCabins = [];

  protected function rules()
  {
    return [
      'plan.number' => 'required|min:6',
      'seats.*.quantity' => 'required|numeric',
      'seats.*.cabin_id' => 'required|numeric',
    ];
  }

  public function addSeat()
  {
    $this->seats[] = [
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

    $this->seats = $plan->seats->toArray();

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

    $this->plan->seats()->delete();

    foreach ($this->seats as $seat) {
      $this->plan->seats()->create([
        'quantity' => $seat['quantity'],
        'cabin_id' => $seat['cabin_id'],
      ]);
    }

    array_push($this->selectedCabins, $seat['cabin_id']);

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'plan updated successfully!']);

    return redirect('dashboard/plan');
  }

  public function getCabinsByIndex($index)
  {
    $selectedCabins = [];

    for ($i = 0; $i < count($this->seats); $i++) {
      if ($i != $index && isset($this->seats[$i]['cabin_id'])) {
        $selectedCabins[] = $this->seats[$i]['cabin_id'];
      }
    }
    return Cabin::whereNotIn('id', $selectedCabins)->get();
  }

  public function render()
  {
    return view('livewire.plan.form');
  }
}
