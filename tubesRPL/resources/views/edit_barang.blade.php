@extends('layout')

@section('title','EditBarang') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Edit Barang</h1>
    <form action="/barang/edit/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name= "nama_barang" id="exampleFormControlInput1" value="{{ $barang->nama_barang }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" name= "harga_barang" id="exampleFormControlInput1" value="{{ $barang->harga }}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" name="foto" type="file" id="formFile">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
            <input type="text" class="form-control" name= "stock" id="exampleFormControlInput1" value="{{ $barang->stock }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
            <input type="text" class="form-control" name= "kategori" id="exampleFormControlInput1" value="{{ $barang->kategori }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Barang</label>
            <textarea class="form-control" name= "deskripsi" id="exampleFormControlTextarea1" rows="3" >{{ $barang->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
    
    
</div>

@endsection
