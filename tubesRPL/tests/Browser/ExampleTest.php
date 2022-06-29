<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
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
                    ->click('a','TRANSAKSI')
                    ->visit('/transaksi')
                    ->assertSee('Kode Transaksi');
                    // ->press('Tambah Transaksi');
                    // ->visit('/transaksi/tambah')
                    // ->assertSee('Pilih Barang');
        });
    }
}
