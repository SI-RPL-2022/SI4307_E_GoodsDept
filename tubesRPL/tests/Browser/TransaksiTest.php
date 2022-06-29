<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TransaksiTest extends DuskTestCase
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
                    ->type('email', 'ich@mail.com')
                    ->type('password', 'ich')
                    ->press('Login')
                    ->visit('/homeAdmin')
                    ->assertSee('Selamat Datang')
                    ->click('a','TRANSAKSI')
                    ->visit('/transaksi')
                    ->assertSee('Kode Transaksi')
                    ->click('a','Tambah Transaksi')
                    ->visit('/transaksi/tambah')
                    ->assertSee('Tambah Transaksi')
                    ->type('nama_barang', 'Ciki')
                    ->type('jumlah_barang', 2)
                    ->press('Tambah Barang')
                    ->assertSee('Ciki')
                    ->click('a','Print')
                    ->visit('/transaksi')
                    ->assertSee('Kode Transaksi');
        });
    }
}
