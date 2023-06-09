<?php

namespace App\Http\Livewire\Flight;

use App\Models\Cabin;
use App\Models\Flight;
use App\Models\FlightFare;
use Livewire\Component;

class Table extends Component
{
  public $flights = [
    'data' => [],
    'links' => [],
    'meta' => [],
    'flightFares' => [],
  ];

  public $cabins = [];

  protected $queryString = [
    'search' => ['except' => ''],
    'perPage' => ['except' => 10],
  ];

  public $search; // search value
  public $perPage = 10; // defult per page 10
  public $status = null; // null value means all
  public $currentPage = 1; // defult current page
  public $sortBy = 'departure_date'; // defult sort by name
  public $sortDirection = 'asc'; // defult sort direction


  public function updated()
  {
    $this->loadData();
  }

  public function sortBy($field, $direction = null)
  {
    $this->sortDirection = $direction ?? ($this->sortDirection == 'asc' ? 'desc' : 'asc');
    $this->sortBy = $field;
    $this->loadData();
  }

  public function changePage($page)
  {
    $this->currentPage = $page;
    $this->loadData();
  }

  public function updatedPerPage()
  {
    $this->currentPage = 1;
    $this->loadData();
  }

  public function loadData()
  {
    $this->flights = Flight::when(!empty($this->search), function ($query) {
      $query->where('departure_date', 'like', '%' . $this->search . '%');
    })
      ->orderBy($this->sortBy, $this->sortDirection)
      ->with('fromAirport', 'toAirport', 'plan', 'flightFares')
      ->paginate($this->perPage, ['*'], 'page', $this->currentPage)
      ->toArray();


    // cabin data
    $this->cabins = Cabin::all();
  }

  public function render()
  {
    return view('livewire.flight.table');
  }
}
