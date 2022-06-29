@extends('layout')

@section('title','Login') 

@section('content')

<div class="container shadow p-3 mb-5 bg-white rounded" style="margin-top:100px; width:40%">
    <form action="/login" method="post">
        @csrf
        <h4 class="text-center" style="margin:20px 0 10px 0">Login</h4>
        <hr>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email</b></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Kata Sandi</b></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
        </div>
        <center>
            <button class="btn btn-primary" type="submit" name="login" style="margin:20px 0 10px 0">Login</button>
        </center>
    </form>
</div>

@endsection