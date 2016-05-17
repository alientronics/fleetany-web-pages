<?php

namespace Tests;

use Alientronics\FleetanyWebPages\Controllers\PageController;

class ExampleTest extends \PHPUnit_Framework_TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $controller = new PageController();
        $result = $controller->about();
        $this->assertEquals(view('fleetany-web-pages::about'), $result);
    }

}