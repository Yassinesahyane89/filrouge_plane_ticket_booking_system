<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
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
