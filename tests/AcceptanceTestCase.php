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

    public function setUp()
    {
        parent::setUp();
        \DB::connection()->enableQueryLog();
    }

    public function tearDown()
    {
        echo ' ' . count(\DB::getQueryLog()) . ' queries in '
            . (array_sum(array_column(\DB::getQueryLog(), 'time'))/1000) . ' seconds';
        //var_dump( \DB::getQueryLog() );
        parent::tearDown();
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/alientronics/fleetany-web/bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
    
}
