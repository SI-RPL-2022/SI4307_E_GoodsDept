<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Dashboard')
                    ->click('a','LOGIN')
                    ->visit('/login')
                    ->assertSee('Email')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'admin123')
                    ->press('Login')
                    ->visit('/homeAdmin')
                    ->assertSee('HI');
        });
    }
}
