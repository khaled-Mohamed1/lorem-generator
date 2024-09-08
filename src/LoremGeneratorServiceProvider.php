<?php

namespace YourVendor\LoremGenerator;

use Illuminate\Support\ServiceProvider;

class LoremGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the Lorem Generator as a singleton
        $this->app->singleton(LoremGenerator::class, function ($app) {
            return new LoremGenerator();
        });
    }

    public function boot()
    {
        // Bootstrapping logic can be added here if needed
    }
}
