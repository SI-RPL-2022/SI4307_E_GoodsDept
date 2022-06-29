@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Dashboard</h1>
    <h6 class="text-center">Hallo, Selamat Datang di </b>WEBSITE GoodsDept</b></h6>
    @auth
    <p class="text-center">HI {{ auth()->user()->nama_user }} !!</p>
    @endauth
    
    <div class="col-sm-12" style="margin-top: 70px">
        <div class="row">
            <div class="col-sm-6 text-center" >
                <img src="{{ asset('assets/market.png') }}" style="width: 250px">
            </div>
            <div class="col-sm-6">
                <p style="margin-top: 100px">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection