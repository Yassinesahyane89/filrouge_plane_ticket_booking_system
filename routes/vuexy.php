<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\UserController;

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

Route::get('home', [HomePage::class, 'index'])->middleware('auth')->name('home');

Route::prefix('account')->middleware('auth')->group(function () {
  Route::get('settings', [AccountController::class, 'account'])->name('account.settings');
  Route::post('account/image', [AccountController::class, 'account_image'])->name('account.settings.image');
  Route::get('settings/security', [AccountController::class, 'security'])->name('account.settings.security');
});

Route::prefix('user')->middleware('auth')->group(function () {
  Route::get('/', [UserController::class, 'index'])->name('user.index');
  Route::get('create', [UserController::class, 'create'])->name('user.create');
  Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
  Route::get('chnage/status/{id}', [UserController::class, 'change_status'])->name('user.change.status');
});

Route::prefix('role')->middleware('auth')->group(function () {
  Route::get('/', [RolePermissionsController::class, 'index'])->name('role.index');
  Route::get('save', [RolePermissionsController::class, 'save'])->name('role.save');
});
