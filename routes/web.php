<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingDetailController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\flightlistController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\SearchFlightController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

// Route::redirect('/', '/login', 301)->name('index');

Route::get('/bookingdetails', function () {
  return view('content.mywebsite.booking-details');
})->name('bookingdetails');
Route::get('/bookinglist', function () {
  return view('content.mywebsite.booking-list');
})->name('bookinglist');
Route::get('/payment', function () {
  return view('content.mywebsite.payment');
})->name('payment');

/**
 * home
 */

Route::get('home', [HomePage::class, 'index'])->middleware('auth')->name('home');

/**
 * account
 */

Route::group(['controller' => AccountController::class, 'prefix' => 'account'], function () {
  Route::get('settings', 'account')->name('account.settings');
  Route::post('account/image', 'account_image')->name('account.settings.image');
  Route::get('settings/security', 'security')->name('account.settings.security');
});

/**
 * user
 */

Route::group(['controller' => UserController::class, 'prefix' => 'user'], function () {
  Route::get('/', 'index')->name('user.index');
  Route::get('create', 'create')->name('user.create');
  Route::get('edit/{id}', 'edit')->name('user.edit');
  Route::get('delete/{id}', 'delete')->name('user.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('user.change.status');
});

/**
 * role
 */

Route::group(['controller' => RolePermissionsController::class, 'prefix' => 'role'], function () {
  Route::get('/', 'index')->name('role.index');
  Route::get('save', 'save')->name('role.save');
});

/**
 * country
 */

Route::group(['controller' => CountryController::class, 'prefix' => 'country'], function () {
  Route::get('/','index')->name('country.index');
  Route::get('create', 'create')->name('country.create');
  Route::get('edit/{id}', 'edit')->name('country.edit');
  Route::get('delete/{id}', 'delete')->name('country.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('country.change.status');
});


/**
 * city
 */

Route::group(['controller' => CityController::class, 'prefix' => 'city'], function () {
  Route::get('/', 'index')->name('city.index');
  Route::get('create', 'create')->name('city.create');
  Route::get('edit/{id}', 'edit')->name('city.edit');
  Route::get('delete/{id}', 'delete')->name('city.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('city.change.status');
});


/**
 * airport
 */

Route::group(['controller' => AirportController::class, 'prefix' => 'airport'], function () {
  Route::get('/', 'index')->name('airport.index');
  Route::get('create', 'create')->name('airport.create');
  Route::get('edit/{id}', 'edit')->name('airport.edit');
  Route::get('delete/{id}', 'delete')->name('airport.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('airport.change.status');
});


/**
 * cabin
 */

Route::group(['controller' => CabinController::class, 'prefix' => 'cabin'], function () {
  Route::get('/', 'index')->name('cabin.index');
  Route::get('create', 'create')->name('cabin.create');
  Route::get('edit/{id}', 'edit')->name('cabin.edit');
  Route::get('delete/{id}', 'delete')->name('cabin.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('cabin.change.status');
});


/**
 * seat
 */

Route::group(['controller' => SeatController::class, 'prefix' => 'seat'], function () {
  Route::get('/', 'index')->name('seat.index');
  Route::get('create', 'create')->name('seat.create');
  Route::get('edit/{id}', 'edit')->name('seat.edit');
  Route::get('delete/{id}', 'delete')->name('seat.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('seat.change.status');
});


/**
 * plan
 */


Route::group(['controller' => PlanController::class, 'prefix' => 'plan'], function () {
  Route::get('/', 'index')->name('plan.index');
  Route::get('create', 'create')->name('plan.create');
  Route::get('edit/{id}', 'edit')->name('plan.edit');
  Route::get('delete/{id}', 'delete')->name('plan.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('plan.change.status');
});


/**
 * flight
 */

Route::group(['controller' => FlightController::class, 'prefix' => 'flight'], function () {
  Route::get('/', 'index')->name('flight.index');
  Route::get('create', 'create')->name('flight.create');
  Route::get('edit/{id}', 'edit')->name('flight.edit');
  Route::get('delete/{id}', 'delete')->name('flight.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('flight.change.status');
});


/**
 * passenger
 */

Route::group(['controller' => PassengerController::class, 'prefix' => 'passenger'], function () {
  Route::get('/', 'index')->name('passenger.index');
  Route::get('create', 'create')->name('passenger.create');
  Route::get('edit/{id}', 'edit')->name('passenger.edit');
  Route::get('delete/{id}', 'delete')->name('passenger.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('passenger.change.status');
});

/**
 * ticket
 */

Route::group(['controller' => TicketController::class, 'prefix' => 'ticket'], function () {
  Route::get('/', 'index')->name('ticket.index');
  Route::get('create', 'create')->name('ticket.create');
  Route::get('edit/{id}', 'edit')->name('ticket.edit');
  Route::get('delete/{id}', 'delete')->name('ticket.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('ticket.change.status');
});

/**
 * contact
 */

Route::group(['controller' => ContactController::class, 'prefix' => 'contact'], function () {
  Route::get('', 'index')->name('contact.index');
  Route::post('store', 'store')->name('contact.store');
});

Route::get('dashboard/contact', [DashboardContactController::class,'index'])->name('dashboard.contact.index');



Route::get('landing', [SearchFlightController::class,'index'])-> name('landing');
Route::post('flightlist', [flightlistController::class, 'index'])->name('flightlist.index');
Route::post('bookingdetail', [BookingDetailController::class, 'index'])->name('bookingdetail.index');
Route::post('bookingdetail/store', [BookingDetailController::class, 'store'])->name('bookingdetail.store');
