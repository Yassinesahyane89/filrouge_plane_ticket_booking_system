<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Salahhusa9\Menu\Facades\Menu;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
      Menu::add('Home', 'home', 'tf-icons ti ti-smart-home')
      ->addSubmenu('Role', function ($menu) {
        $menu->add('List', 'role.index');
      }, 'fa-solid fa-person-circle-question')
      ->addSubmenu('Users', function ($menu) {
        $menu->add('List Users', 'user.index');
        $menu->add('Add User', 'user.create');
      }, 'tf-icons ti ti-users')
      ->addSubmenu('Countries', function ($menu) {
        $menu->add('List Countries', 'country.index');
        $menu->add('Add Country', 'country.create');
      }, '')
    ->addSubmenu('Cities', function ($menu) {
      $menu->add('List Cities', 'city.index');
      $menu->add('Add Cities', 'city.create');
    }, '')
    ->addSubmenu('Airports', function ($menu) {
      $menu->add('List Airports', 'airport.index');
      $menu->add('Add Airports', 'airport.create');
    }, '')
      ->addSubmenu('Cabins', function ($menu) {
        $menu->add('List Cabins', 'cabin.index');
        $menu->add('Add Cabins', 'cabin.create');
      }, '');
  }
}
