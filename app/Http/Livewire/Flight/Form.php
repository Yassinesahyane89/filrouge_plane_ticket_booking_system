<?php

namespace App\Http\Livewire\Flight;

use App\Models\Airport;
use App\Models\Flight;
use App\Models\Plan;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Flight $flight;
  public $airports = [];
  public $plans = [];

  protected function rules()
  {
    return [
      'flight.departureDate' => 'required|after_or_equal:today',
      'flight.arrivalDate' => 'required|after:flight.departureDate',
      'flight.from_airport_id' => 'required',
      'flight.to_airport_id' => 'required',
      'flight.plan_id' => 'required',
    ];
  }


  public function mount($flight)
  {
    $this->flight = $flight;
    $this->airports = Airport::all();
    $this->plans = Plan::all();
  }

  protected function validateFlightDates()
  {
    if ($this->flight->arrivalDate < $this->flight->departureDate) {
      $this->addError('flight.arrivalDate', 'The arrival date must be later than the departure date.');
    }
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();
    $this->validateFlightDates();

    $this->flight->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'flight updated successfully!']);

    return redirect('flight');
  }

  public function render()
  {
    return view('livewire.flight.form');
  }
}
