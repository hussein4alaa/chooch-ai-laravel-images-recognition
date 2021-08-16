<?php

namespace g4t\Chooch;

use Illuminate\Support\ServiceProvider;

class ChoochServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/chooch.php' => base_path('config/chooch.php'),
        ]);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
