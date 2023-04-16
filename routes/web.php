<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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

// ROUT FOR VIEW landing page
Route::get('/landing', function () {
  return view('content.mywebsite.landing-page');
})->name('landing');
Route::get('/contact', function () {
  return view('content.mywebsite.contact');
})->name('contact');
Route::get('/bookingdetails', function () {
  return view('content.mywebsite.booking-details');
})->name('bookingdetails');
Route::get('/bookinglist', function () {
  return view('content.mywebsite.booking-list');
})->name('bookinglist');

Route::prefix('country')->middleware('auth')->group(function () {
  Route::get('/', [CountryController::class, 'index'])->name('country.index');
  Route::get('create', [CountryController::class, 'create'])->name('country.create');
  Route::get('edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
  Route::get('delete/{id}', [CountryController::class, 'delete'])->name('country.delete');
  Route::get('chnage/status/{id}', [CountryController::class, 'change_status'])->name('country.change.status');
});


Route::prefix('city')->middleware('auth')->group(function () {
  Route::get('/', [CityController::class, 'index'])->name('city.index');
  Route::get('create', [CityController::class, 'create'])->name('city.create');
  Route::get('edit/{id}', [CityController::class, 'edit'])->name('city.edit');
  Route::get('delete/{id}', [CityController::class, 'delete'])->name('city.delete');
  Route::get('chnage/status/{id}', [CityController::class, 'change_status'])->name('city.change.status');
});

Route::prefix('airport')->middleware('auth')->group(function () {
  Route::get('/', [AirportController::class, 'index'])->name('airport.index');
  Route::get('create', [AirportController::class, 'create'])->name('airport.create');
  Route::get('edit/{id}', [AirportController::class, 'edit'])->name('airport.edit');
  Route::get('delete/{id}', [AirportController::class, 'delete'])->name('airport.delete');
  Route::get('chnage/status/{id}', [AirportController::class, 'change_status'])->name('airport.change.status');
});

Route::prefix('cabin')->middleware('auth')->group(function () {
  Route::get('/', [CabinController::class, 'index'])->name('cabin.index');
  Route::get('create', [CabinController::class, 'create'])->name('cabin.create');
  Route::get('edit/{id}', [CabinController::class, 'edit'])->name('cabin.edit');
  Route::get('delete/{id}', [CabinController::class, 'delete'])->name('cabin.delete');
  Route::get('chnage/status/{id}', [CabinController::class, 'change_status'])->name('cabin.change.status');
});

Route::prefix('seat')->middleware('auth')->group(function () {
  Route::get('/', [SeatController::class, 'index'])->name('seat.index');
  Route::get('create', [SeatController::class, 'create'])->name('seat.create');
  Route::get('edit/{id}', [SeatController::class, 'edit'])->name('seat.edit');
  Route::get('delete/{id}', [SeatController::class, 'delete'])->name('seat.delete');
  Route::get('chnage/status/{id}', [SeatController::class, 'change_status'])->name('seat.change.status');
});

Route::prefix('plan')->middleware('auth')->group(function () {
  Route::get('/', [PlanController::class, 'index'])->name('plan.index');
  Route::get('create', [PlanController::class, 'create'])->name('plan.create');
  Route::get('edit/{id}', [PlanController::class, 'edit'])->name('plan.edit');
  Route::get('delete/{id}', [PlanController::class, 'delete'])->name('plan.delete');
  Route::get('chnage/status/{id}', [PlanController::class, 'change_status'])->name('plan.change.status');
});

Route::prefix('flight')->middleware('auth')->group(function () {
  Route::get('/', [FlightController::class, 'index'])->name('flight.index');
  Route::get('create', [FlightController::class, 'create'])->name('flight.create');
  Route::get('edit/{id}', [FlightController::class, 'edit'])->name('flight.edit');
  Route::get('delete/{id}', [FlightController::class, 'delete'])->name('flight.delete');
  Route::get('chnage/status/{id}', [FlightController::class, 'change_status'])->name('flight.change.status');
});

Route::prefix('passenger')->middleware('auth')->group(function () {
  Route::get('/', [PassengerController::class, 'index'])->name('passenger.index');
  Route::get('create', [PassengerController::class, 'create'])->name('passenger.create');
  Route::get('edit/{id}', [PassengerController::class, 'edit'])->name('passenger.edit');
  Route::get('delete/{id}', [PassengerController::class, 'delete'])->name('passenger.delete');
  Route::get('chnage/status/{id}', [PassengerController::class, 'change_status'])->name('passenger.change.status');
});

Route::prefix('ticket')->middleware('auth')->group(function () {
  Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
  Route::get('create', [TicketController::class, 'create'])->name('ticket.create');
  Route::get('edit/{id}', [TicketController::class, 'edit'])->name('ticket.edit');
  Route::get('delete/{id}', [TicketController::class, 'delete'])->name('ticket.delete');
  Route::get('chnage/status/{id}', [TicketController::class, 'change_status'])->name('ticket.change.status');
});
