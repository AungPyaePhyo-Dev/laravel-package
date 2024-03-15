<?php

namespace Aung\Calc;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Aung\Calc\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calc');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
    }
}
