<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = User::where('level','=',2)->get();
        return view("kasir", compact("kasir"));
    }

    public function insertKasir(Request $request)
    {
        $kasir = new User();
        $kasir->nama_user = $request->nama_user;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->alamat = $request->alamat;
        $kasir->no_tlp = $request->no_tlp;
        $kasir->level = 2;
        $kasir->save();
        return redirect("/kasir");
    }

    public function editKasir($id)
    {
        $kasir = User::find($id);
        return view("edit_kasir", compact("kasir"));
    }

    public function updateKasir(Request $request,$id)
    {
        $kasir = User::find($id);
        $kasir->nama_user = $request->nama_user;
        $kasir->email = $request->email;
        $kasir->password = $request->password;
        $kasir->alamat = $request->alamat;
        $kasir->no_tlp = $request->no_tlp;
        $kasir->level = 2;
        $kasir->save();
        return redirect("/kasir");
    }

    public function deleteKasir($id)
    {
        $kasir = User::find($id)->delete();
        return redirect("/kasir");
    }
    
    public function editProfile($id)
    {
        return view("editProfile");
    }

    public function updateProfile(Request $request,$id)
    {
        $kasir = User::find($id);
        $kasir->nama_user = $request->nama_user;
        $kasir->email = $request->email;
        $kasir->alamat = $request->alamat;
        $kasir->no_tlp = $request->no_tlp;
        $kasir->level = 2;
        $kasir->save();
        return redirect("/profile");
    }
}
