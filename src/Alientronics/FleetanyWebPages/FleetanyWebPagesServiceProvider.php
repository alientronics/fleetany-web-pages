<?php

namespace Alientronics\FleetanyWebPages;

use Illuminate\Support\ServiceProvider;

/**
 * Class FleetanyWebPagesServiceProvider
 * @package Alientronics\FleetanyWebPages
 */
class FleetanyWebPagesServiceProvider extends ServiceProvider {

    /**
     * @return void
     */
    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__ . '/../../views', 'fleetany-web-pages');

        // Routes
        include __DIR__.'/../../routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}