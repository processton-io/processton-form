<?php

namespace Processton\ProcesstonForm;

use Illuminate\Support\ServiceProvider;

class ProcesstonFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('processton-form', function () {
            return new ProcesstonForm;
        });
    }
}
