<?php

namespace Tests;

use Tests\AcceptanceTestCase;
class ExampleTest extends AcceptanceTestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/tos')->see('You must provide a valid email address');
    }

}