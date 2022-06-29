<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class KasirTest extends DuskTestCase
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
                    ->assertSee('Selamat Datang')
                    ->press('a','KASIR')
                    ->visit('/kasir')
                    ->assertSee('Kasir')
                    ->click('a', 'Insert')
                    ->visit('/kasir/create')
                    ->assertSee('Tambah Kasir')
                    ->type('nama_user', 'nawal')
                    ->type('email', 'nawal@gmail.com')
                    ->type('password', '123')
                    ->type('alamat', 'bsd')
                    ->type('no_tlp', '08122222222')
                    ->press('button','Tambah');
        });
    }
}
