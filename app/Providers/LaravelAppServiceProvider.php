<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class LaravelAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
        if (Request::segment(0) == 'home') {
          $halaman = 'home';
        }

        if (Request::segment(1) == 'anggota') {
          $halaman = 'anggota';
        }

        if (Request::segment(1) == 'produk') {
          $halaman = 'produk';
        }

        if (Request::segment(1) == 'about') {
          $halaman = 'about';
        }

        if (Request::segment(1) == 'kategori') {
          $halaman = 'kategori';
        }

        if (Request::segment(1) == 'user') {
          $halaman = 'user';
        }

        view()->share('halaman', $halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
