<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SeatController;
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
