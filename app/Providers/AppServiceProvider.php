<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //

  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //store_id
        App::singleton('store', function () {
      return Auth::user()->store()->first();
    });
  }
}
