<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class AcceptanceTestCase extends BaseTestCase
{
    
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */

    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/alientronics/fleetany-web/bootstrap/app.php';

        return $app;
    }
}
