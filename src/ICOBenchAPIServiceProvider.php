<?php

namespace Fixik\ICOBench;

use Illuminate\Support\ServiceProvider;

class ICOBenchAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/icobench.php' => config_path('icobench.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}