<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view("barang", compact("barang"));
    }
    public function insertBarang(Request $request)
    {
        //return $request->all();
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->stock = $request->stock;
        $barang->harga = $request->harga_barang;
        $barang->kategori = $request->kategori;
        $barang->deskripsi = $request->deskripsi;
        $barang->foto = $request->file("foto")->store("barang_foto");
        $barang->save();
        return redirect("/barang");
    }
    public function editBarang($id)
    {
        $barang = Barang::find($id);
        return view("edit_barang", compact("barang"));

    }
    public function updateBarang(Request $request,$id)
    {
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stock = $request->stock;
        $barang->harga = $request->harga_barang;
        $barang->kategori = $request->kategori;
        $barang->deskripsi = $request->deskripsi;
        if($request->foto){
            $barang->foto = $request->file("foto")->store("barang_foto");
        }
        $barang->save();
        return redirect("/barang");
    }
    public function deleteBarang($id)
    {
        $barang = Barang::find($id)->delete();
        return redirect("/barang");
    }
}
