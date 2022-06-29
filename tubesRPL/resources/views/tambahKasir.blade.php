@extends('layout')

@section('title','TambahKasir') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <form action="/kasir/insert" method="POST" enctype="multipart/form-data">
        <h1 class="text-center">Tambah Kasir</h1>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" name= "nama_user" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" name= "email" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="text" class="form-control" name= "password" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" name= "alamat" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telp</label>
            <input type="text" class="form-control" name= "no_tlp" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
    
    
</div>

@endsection
