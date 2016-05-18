<?php

namespace Tests;

use Tests\AcceptanceTestCase;

class PagesTest extends AcceptanceTestCase
{

    public function testAbout()
    {
        $this->visit('/about')->see('About')->click('Portuguese')->seePageIs('/about');
    }
    
    public function testHome()
    {
        $this->visit('/home')->see('Home')->click('Portuguese')->seePageIs('/home');
    }
    
    public function testPricing()
    {
        $this->visit('/pricing')->see('Pricing')->click('Portuguese')->seePageIs('/pricing');
    }
    
    public function testPrivacy()
    {
        $this->visit('/privacy')->see('Privacy')->click('Portuguese')->seePageIs('/privacy');
    }
    
    public function testTos()
    {
        $this->visit('/tos')->see('Terms of Service')->click('Portuguese')->seePageIs('/tos');
    }
}
