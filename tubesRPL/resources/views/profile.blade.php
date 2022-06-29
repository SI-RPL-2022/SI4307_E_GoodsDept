@extends('layout')

@section('title','Profile') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Profile</h1>
    <div class="row">
      <div class="card mb-3">
        <div class="card-body">
          <table>
            <tr>
              <td><h5 class="card-title">Nama User</h5></td>
              <td>:</td>
              <td><h5 class="card-title">{{ auth()->user()->nama_user }}</h5></td>
            </tr>
            <tr>
              <td><p class="card-text">Email</p></td>
              <td>:</td>
              <td><p class="card-text">{{ auth()->user()->email }}</p></td>
            </tr>
            <tr>
              <td><p class="card-text">Alamat</p></td>
              <td>:</td>
              <td><p class="card-text">{{ auth()->user()->alamat }}</p></td>
            </tr>
            <tr>
              <td><p class="card-text">No. Telp</p></td>
              <td>:</td>
              <td><p class="card-text">{{ auth()->user()->no_tlp }}</p></td>
            </tr>
          </table>
        </div>
    </div>
    
  </div>
</div>

@endsection
