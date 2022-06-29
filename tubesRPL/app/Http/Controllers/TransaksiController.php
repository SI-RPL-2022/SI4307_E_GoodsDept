<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all()->groupBy('kode_transaksi');
        return view('riwayat_transaksi', compact('transaksi'));

    }

    public function tambah()
    {
        $transaksi = Transaksi::where('kode_transaksi','=',session()->get('kode'))->get();
        $barang = Barang::all();
        return view('transaksi', compact('barang','transaksi'));
        
    }

    public function input(Request $request)
    {
        if (!session()->has('kode')) {
            $random = rand(1000000,9999999);
            $kode = 'KT-'.$random;
            $request->session()->put('kode', $kode);
        }

        $barang = Barang::where('nama_barang','=',$request->nama_barang)->first();

        $transaksi = new Transaksi();
        $transaksi->kode_transaksi = session()->get('kode');
        $transaksi->kasir_id = auth()->user()->id;
        $transaksi->barang_id = $barang->id;
        $transaksi->jumlah_barang = $request->jumlah_barang;
        $transaksi->total_harga = $request->jumlah_barang * $barang->harga;
        $transaksi->status = 'Unpaid';

        $barang->stock = $barang->stock - $request->jumlah_barang; 

        $barang->save();
        $transaksi->save();
        
        return back();
    }

    public function print()
    {
        $transaksi = Transaksi::where('kode_transaksi','=', session()->get('kode'))->get();

        foreach ($transaksi as $key) {
            
            $transaksi_barang = Transaksi::find($key->id);
            
            $transaksi_barang->status = 'Paid';
            $transaksi_barang->save();
        }

        session()->pull('kode');

        return redirect('/transaksi');
    }

    public function detail($id)
    {
        $transaksi = Transaksi::where('kode_transaksi','=',$id)->get();
        return view('transaksi_detail', compact('transaksi'));
    }

    public function delete($id)
    {
        $transaksi = Transaksi::find($id);

        $barang = Barang::find($transaksi->barang_id);

        $barang->stock = $barang->stock + $transaksi->jumlah_barang;

        $barang->save();
        $transaksi->delete();

        return back();
    }

    public function batal($id)
    {
        $transaksi = Transaksi::where('kode_transaksi','=',$id)->delete();

        session()->pull('kode');

        return back();
    }
}
