<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Kategori;
use App\User;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('produk.form', function($view) {
            $view->with('list_kategori', Kategori::lists('nama_kategori', 'id'));
            $view->with('list_users', User::lists('name', 'id'));
        });

        view()->composer('anggota.form', function($view) {
            $view->with('list_kategori', Kategori::lists('nama_kategori', 'id'));
        });

        view()->composer('produk.form_pencarian', function($view) {
            $view->with('list_kategori', Kategori::lists('nama_kategori', 'id'));
        });
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
