<?php

use App\Http\Controllers\AvailableFlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingDetailController;
use App\Http\Controllers\CoordinatePassenegerController;
use App\Http\Controllers\dashboard\AccountController;
use App\Http\Controllers\dashboard\AirportController;
use App\Http\Controllers\dashboard\CabinController;
use App\Http\Controllers\dashboard\CityController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\CountryController;
use App\Http\Controllers\dashboard\FlightController;
use App\Http\Controllers\dashboard\HomePage;
use App\Http\Controllers\dashboard\PassengerController;
use App\Http\Controllers\dashboard\PlanController;
use App\Http\Controllers\dashboard\RolePermissionsController;
use App\Http\Controllers\dashboard\SeatController;
use App\Http\Controllers\dashboard\TicketController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchFlightController;
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



/* ======================================== Dashboard ======================================== */
Route::redirect('/', '/login', 301)->name('index');

/**
 * home
 */

Route::get('dashboard/home', [HomePage::class, 'index'])->middleware('auth')->name('home');

/**
 * account
 */

Route::group(['controller' => AccountController::class, 'prefix' => 'dashboard/account'], function () {
  Route::get('settings', 'account')->name('account.settings');
  Route::post('image', 'account_image')->name('account.settings.image');
  Route::get('settings/security', 'security')->name('account.settings.security');
});

/**
 * user
 */

Route::group(['controller' => UserController::class, 'prefix' => 'dashboard/user'], function () {
  Route::get('/', 'index')->name('user.index');
  Route::get('create', 'create')->name('user.create');
  Route::get('edit/{id}', 'edit')->name('user.edit');
  Route::get('delete/{id}', 'delete')->name('user.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('user.change.status');
});

/**
 * role
 */

Route::group(['controller' => RolePermissionsController::class, 'prefix' => 'dashboard/role'], function () {
  Route::get('/', 'index')->name('role.index');
  Route::get('save', 'save')->name('role.save');
});

/**
 * country
 */

Route::group(['controller' => CountryController::class, 'prefix' => 'dashboard/country'], function () {
  Route::get('/','index')->name('country.index');
  Route::get('create', 'create')->name('country.create');
  Route::get('edit/{id}', 'edit')->name('country.edit');
  Route::get('delete/{id}', 'delete')->name('country.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('country.change.status');
});


/**
 * city
 */

Route::group(['controller' => CityController::class, 'prefix' => 'dashboard/city'], function () {
  Route::get('/', 'index')->name('city.index');
  Route::get('create', 'create')->name('city.create');
  Route::get('edit/{id}', 'edit')->name('city.edit');
  Route::get('delete/{id}', 'delete')->name('city.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('city.change.status');
});


/**
 * airport
 */

Route::group(['controller' => AirportController::class, 'prefix' => 'dashboard/airport'], function () {
  Route::get('/', 'index')->name('airport.index');
  Route::get('create', 'create')->name('airport.create');
  Route::get('edit/{id}', 'edit')->name('airport.edit');
  Route::get('delete/{id}', 'delete')->name('airport.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('airport.change.status');
});


/**
 * cabin
 */

Route::group(['controller' => CabinController::class, 'prefix' => 'dashboard/cabin'], function () {
  Route::get('/', 'index')->name('cabin.index');
  Route::get('create', 'create')->name('cabin.create');
  Route::get('edit/{id}', 'edit')->name('cabin.edit');
  Route::get('delete/{id}', 'delete')->name('cabin.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('cabin.change.status');
});


/**
 * seat
 */

Route::group(['controller' => SeatController::class, 'prefix' => 'dashboard/seat'], function () {
  Route::get('/', 'index')->name('seat.index');
  Route::get('create', 'create')->name('seat.create');
  Route::get('edit/{id}', 'edit')->name('seat.edit');
  Route::get('delete/{id}', 'delete')->name('seat.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('seat.change.status');
});


/**
 * plan
 */


Route::group(['controller' => PlanController::class, 'prefix' => 'dashboard/plan'], function () {
  Route::get('/', 'index')->name('plan.index');
  Route::get('create', 'create')->name('plan.create');
  Route::get('edit/{id}', 'edit')->name('plan.edit');
  Route::get('delete/{id}', 'delete')->name('plan.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('plan.change.status');
});


/**
 * flight
 */

Route::group(['controller' => FlightController::class, 'prefix' => 'dashboard/flight'], function () {
  Route::get('/', 'index')->name('flight.index');
  Route::get('create', 'create')->name('flight.create');
  Route::get('edit/{id}', 'edit')->name('flight.edit');
  Route::get('delete/{id}', 'delete')->name('flight.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('flight.change.status');
});


/**
 * passenger
 */

Route::group(['controller' => PassengerController::class, 'prefix' => 'dashboard/passenger'], function () {
  Route::get('/', 'index')->name('passenger.index');
  Route::get('create', 'create')->name('passenger.create');
  Route::get('edit/{id}', 'edit')->name('passenger.edit');
  Route::get('delete/{id}', 'delete')->name('passenger.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('passenger.change.status');
});

/**
 * ticket
 */

Route::group(['controller' => TicketController::class, 'prefix' => 'dashboard/ticket'], function () {
  Route::get('/', 'index')->name('ticket.index');
  Route::get('create', 'create')->name('ticket.create');
  Route::get('edit/{id}', 'edit')->name('ticket.edit');
  Route::get('delete/{id}', 'delete')->name('ticket.delete');
  Route::get('chnage/status/{id}', 'change_status')->name('ticket.change.status');
});

/**
 * contact
 */

Route::get('dashboard/contact', [ContactController::class, 'index'])->name('dashboard.contact.index');

/* ======================================== My Pages ======================================== */

/**
 * landing page
 */

  Route::group(['controller' => BookingController::class, 'prefix' => 'booking'], function () {
    Route::get('/',  'index')->name('landing');
  });

/**
 * Search flight
 */

  Route::group(['controller' => SearchFlightController::class, 'prefix' => 'flight-search'], function () {
    Route::get('/',  'searchFlight')->name('flight-search');
  });

/**
 * availabel flight
 */

  Route::group(['controller' => CoordinatePassenegerController::class, 'prefix' => 'availabel-flight'], function () {
    Route::get('coordinates/{flight}', 'index')->name('availabel-flight.coordinates');
    Route::post('storeInformationPassenger/{flight}', 'storeInformationPassenger')->name('availabel-flight.storeInformationPassenger');
  });

/**
 * contact
 */

Route::group(['controller' => ContactController::class, 'prefix' => 'contact'], function () {
  Route::get('', 'index')->name('contact.index');
  Route::post('store', 'store')->name('contact.store');
});

/**
 * payment
 */

Route::group(['controller' => PaymentController::class, 'prefix' => 'payment'], function () {
  Route::get('/{flight}', 'index')->name('payment.index');
  Route::post('store', 'store')->name('payment.store');
});




// Route::get('/bookingdetails', function () {
//   return view('content.pages.booking-details');
// })->name('bookingdetails');
// Route::get('/bookinglist', function () {
//   return view('content.pages.booking-list');
// })->name('bookinglist');
// Route::get('/payment', function () {
//   return view('content.pages.payment');
// })->name('payment');
