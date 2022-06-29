<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BarangTest extends DuskTestCase
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
                    ->assertPathIs('/homeAdmin')
                    ->assertSee('Selamat Datang')
                    ->click('a', 'BARANG')
                    ->visit('/barang')
                    ->assertSee('Daftar Barang')
                    ->click('a','Insert')
                    ->visit('/barang/create')
                    ->assertSee('Tambah Barang')
                    ->type('nama_barang','Kasur')
                    ->type('harga_barang','10000')
                    ->type('stock','1')
                    ->type('kategori','Kasur')
                    ->type('deskripsi','Ini kasur');
                    // ->press('tambah')
                    // ->visit('/barang'); 
        });
    }
}
