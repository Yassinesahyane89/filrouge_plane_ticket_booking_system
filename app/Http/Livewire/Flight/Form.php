<?php

namespace App\Http\Livewire\Flight;

use App\Models\Airport;
use App\Models\Cabin;
use App\Models\Flight;
use App\Models\Plan;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Flight $flight;
  public $airports = [];
  public $plans = [];
  public $flightFares = [];
  public $cabins = [];
  public $selectedCabins = [];

  protected function rules()
  {
    return [
      'flight.departure_date' => 'required|after_or_equal:today',
      'flight.arrival_date' => 'required|after:flight.departure_date',
      'flight.from_airport_id' => 'required',
      'flight.to_airport_id' => 'required',
      'flight.plan_id' => 'required',
      'flightFares.*.fare' => 'required|numeric',
      'flightFares.*.cabin_id' => 'required|numeric',
    ];
  }

  public function addFlightFare()
  {
    $this->flightFares[] = [
      'fare' => 1,
    ];
  }

  public function remove($index)
  {
    unset($this->flightFares[$index]);
    $this->flightFares = array_values($this->flightFares);
  }


  public function mount($flight)
  {
    $this->flight = $flight;
    $this->airports = Airport::all();
    $this->plans = Plan::all();
    $this->cabins = Cabin::all();

    $this->flightFares = $flight->flightFares->toArray();

    if (count($this->flightFares) == 0) {
      $this->addFlightFare();
    }
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

    $this->flight->flightFares()->delete();

    foreach ($this->flightFares as $flightFare) {
      $this->flight->flightFares()->create($flightFare);
    }

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'flight updated successfully!']);

    return redirect('flight');
  }

  public function getCabinsByIndex($index){
    // $this->selectedCabins[$index] = Cabin::where('id', $this->flightFares[$index]['cabin_id'])->first();

    $selectedCabins = [];

    for ($i = 0; $i < count($this->flightFares); $i++) {
      if ($i != $index && isset($this->flightFares[$i]['cabin_id'])) {
        $selectedCabins[] = $this->flightFares[$i]['cabin_id'];
      }
    }
    return Cabin::whereNotIn('id', $selectedCabins)->get();
  }

  public function render()
  {
    return view('livewire.flight.form');
  }
}
