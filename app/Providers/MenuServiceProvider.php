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
    Menu::add('Home', 'home', 'tf-icons ti ti-smart-home');
  }
}
