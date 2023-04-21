<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingDetailController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\flightlistController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SearchFlightController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login', 301)->name('index');

Route::get('/bookingdetails', function () {
  return view('content.mywebsite.booking-details');
})->name('bookingdetails');
Route::get('/bookinglist', function () {
  return view('content.mywebsite.booking-list');
})->name('bookinglist');

// Route::prefix('country')->middleware('auth')->group(function () {
//   Route::get('/', [CountryController::class, 'index'])->name('country.index');
//   Route::get('create', [CountryController::class, 'create'])->name('country.create');
//   Route::get('edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
//   Route::get('delete/{id}', [CountryController::class, 'delete'])->name('country.delete');
//   Route::get('chnage/status/{id}', [CountryController::class, 'change_status'])->name('country.change.status');
// });

Route::group(['controller' => CountryController::class, 'prefix' => 'country'], function () {
  Route::get('/','index')->name('country.index');
  Route::get('create', 'create')->name('country.create');
  Route::get('edit/{id}', 'edit')->name('country.edit');
  Route::get('delete/{id}', 'delete')->name('country.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('country.change.status');
});


// Route::prefix('city')->middleware('auth')->group(function () {
//   Route::get('/', [CityController::class, 'index'])->name('city.index');
//   Route::get('create', [CityController::class, 'create'])->name('city.create');
//   Route::get('edit/{id}', [CityController::class, 'edit'])->name('city.edit');
//   Route::get('delete/{id}', [CityController::class, 'delete'])->name('city.delete');
//   Route::get('chnage/status/{id}', [CityController::class, 'change_status'])->name('city.change.status');
// });

Route::group(['controller' => CityController::class, 'prefix' => 'city'], function () {
  Route::get('/', 'index')->name('city.index');
  Route::get('create', 'create')->name('city.create');
  Route::get('edit/{id}', 'edit')->name('city.edit');
  Route::get('delete/{id}', 'delete')->name('city.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('city.change.status');
});

// Route::prefix('airport')->middleware('auth')->group(function () {
//   Route::get('/', [AirportController::class, 'index'])->name('airport.index');
//   Route::get('create', [AirportController::class, 'create'])->name('airport.create');
//   Route::get('edit/{id}', [AirportController::class, 'edit'])->name('airport.edit');
//   Route::get('delete/{id}', [AirportController::class, 'delete'])->name('airport.delete');
//   Route::get('chnage/status/{id}', [AirportController::class, 'change_status'])->name('airport.change.status');
// });

Route::group(['controller' => AirportController::class, 'prefix' => 'airport'], function () {
  Route::get('/', 'index')->name('airport.index');
  Route::get('create', 'create')->name('airport.create');
  Route::get('edit/{id}', 'edit')->name('airport.edit');
  Route::get('delete/{id}', 'delete')->name('airport.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('airport.change.status');
});


// Route::prefix('cabin')->middleware('auth')->group(function () {
//   Route::get('/', [CabinController::class, 'index'])->name('cabin.index');
//   Route::get('create', [CabinController::class, 'create'])->name('cabin.create');
//   Route::get('edit/{id}', [CabinController::class, 'edit'])->name('cabin.edit');
//   Route::get('delete/{id}', [CabinController::class, 'delete'])->name('cabin.delete');
//   Route::get('chnage/status/{id}', [CabinController::class, 'change_status'])->name('cabin.change.status');
// });

Route::group(['controller' => CabinController::class, 'prefix' => 'cabin'], function () {
  Route::get('/', 'index')->name('cabin.index');
  Route::get('create', 'create')->name('cabin.create');
  Route::get('edit/{id}', 'edit')->name('cabin.edit');
  Route::get('delete/{id}', 'delete')->name('cabin.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('cabin.change.status');
});

// Route::prefix('seat')->middleware('auth')->group(function () {
//   Route::get('/', [SeatController::class, 'index'])->name('seat.index');
//   Route::get('create', [SeatController::class, 'create'])->name('seat.create');
//   Route::get('edit/{id}', [SeatController::class, 'edit'])->name('seat.edit');
//   Route::get('delete/{id}', [SeatController::class, 'delete'])->name('seat.delete');
//   Route::get('chnage/status/{id}', [SeatController::class, 'change_status'])->name('seat.change.status');
// });

Route::group(['controller' => SeatController::class, 'prefix' => 'seat'], function () {
  Route::get('/', 'index')->name('seat.index');
  Route::get('create', 'create')->name('seat.create');
  Route::get('edit/{id}', 'edit')->name('seat.edit');
  Route::get('delete/{id}', 'delete')->name('seat.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('seat.change.status');
});

// Route::prefix('plan')->middleware('auth')->group(function () {
//   Route::get('/', [PlanController::class, 'index'])->name('plan.index');
//   Route::get('create', [PlanController::class, 'create'])->name('plan.create');
//   Route::get('edit/{id}', [PlanController::class, 'edit'])->name('plan.edit');
//   Route::get('delete/{id}', [PlanController::class, 'delete'])->name('plan.delete');
//   Route::get('chnage/status/{id}', [PlanController::class, 'change_status'])->name('plan.change.status');
// });

Route::group(['controller' => PlanController::class, 'prefix' => 'plan'], function () {
  Route::get('/', 'index')->name('plan.index');
  Route::get('create', 'create')->name('plan.create');
  Route::get('edit/{id}', 'edit')->name('plan.edit');
  Route::get('delete/{id}', 'delete')->name('plan.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('plan.change.status');
});

// Route::prefix('flight')->middleware('auth')->group(function () {
//   Route::get('/', [FlightController::class, 'index'])->name('flight.index');
//   Route::get('create', [FlightController::class, 'create'])->name('flight.create');
//   Route::get('edit/{id}', [FlightController::class, 'edit'])->name('flight.edit');
//   Route::get('delete/{id}', [FlightController::class, 'delete'])->name('flight.delete');
//   Route::get('chnage/status/{id}', [FlightController::class, 'change_status'])->name('flight.change.status');
// });

Route::group(['controller' => FlightController::class, 'prefix' => 'flight'], function () {
  Route::get('/', 'index')->name('flight.index');
  Route::get('create', 'create')->name('flight.create');
  Route::get('edit/{id}', 'edit')->name('flight.edit');
  Route::get('delete/{id}', 'delete')->name('flight.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('flight.change.status');
});

// Route::prefix('passenger')->middleware('auth')->group(function () {
//   Route::get('/', [PassengerController::class, 'index'])->name('passenger.index');
//   Route::get('create', [PassengerController::class, 'create'])->name('passenger.create');
//   Route::get('edit/{id}', [PassengerController::class, 'edit'])->name('passenger.edit');
//   Route::get('delete/{id}', [PassengerController::class, 'delete'])->name('passenger.delete');
//   Route::get('chnage/status/{id}', [PassengerController::class, 'change_status'])->name('passenger.change.status');
// });

Route::group(['controller' => PassengerController::class, 'prefix' => 'passenger'], function () {
  Route::get('/', 'index')->name('passenger.index');
  Route::get('create', 'create')->name('passenger.create');
  Route::get('edit/{id}', 'edit')->name('passenger.edit');
  Route::get('delete/{id}', 'delete')->name('passenger.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('passenger.change.status');
});

// Route::prefix('ticket')->middleware('auth')->group(function () {
//   Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
//   Route::get('create', [TicketController::class, 'create'])->name('ticket.create');
//   Route::get('edit/{id}', [TicketController::class, 'edit'])->name('ticket.edit');
//   Route::get('delete/{id}', [TicketController::class, 'delete'])->name('ticket.delete');
//   Route::get('chnage/status/{id}', [TicketController::class, 'change_status'])->name('ticket.change.status');
// });

Route::group(['controller' => TicketController::class, 'prefix' => 'ticket'], function () {
  Route::get('/', 'index')->name('ticket.index');
  Route::get('create', 'create')->name('ticket.create');
  Route::get('edit/{id}', 'edit')->name('ticket.edit');
  Route::get('delete/{id}', 'delete')->name('ticket.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('ticket.change.status');
});

Route::prefix('contact')->group(function () {
  Route::get('/', [ContactController::class, 'index'])->name('contact.index');
  Route::post('store', [ContactController::class, 'store'])->name('contact.store');
});

Route::group(['controller' => ContactController::class, 'prefix' => 'contact'], function () {
  Route::get('', 'index')->name('contact.index');
  Route::post('store', 'store')->name('contact.store');
});

Route::get('dashboard/contact', [DashboardContactController::class,'index'])->name('dashboard.contact.index');
Route::get('landing', [SearchFlightController::class,'index'])-> name('landing');


Route::post('flightlist', [flightlistController::class, 'index'])->name('flightlist.index');

Route::post('bookingdetail', [BookingDetailController::class, 'index'])->name('bookingdetail.index');
Route::post('bookingdetail/store', [BookingDetailController::class, 'store'])->name('bookingdetail.store');
