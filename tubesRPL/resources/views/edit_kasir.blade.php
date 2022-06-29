@extends('layout')

@section('title','EditKasir') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Edit Kasir</h1>
    <form action="/kasir/edit/{{ $kasir->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" name= "nama_user" id="exampleFormControlInput1" value="{{ $kasir->nama_user }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" name= "email" id="exampleFormControlInput1" value="{{ $kasir->email }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="text" class="form-control" name= "password" id="exampleFormControlInput1" value="{{ $kasir->password }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" name= "alamat" id="exampleFormControlInput1" value="{{ $kasir->alamat }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telp</label>
            <input type="text" class="form-control" name= "no_tlp" id="exampleFormControlInput1" value="{{ $kasir->no_tlp }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
    
    
</div>

@endsection
