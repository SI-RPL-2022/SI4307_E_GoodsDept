@extends('layout')

@section('title','Kasir') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
  <h1 class="text-center">Kasir</h1>
  <a href="/kasir/create" class="btn btn-success" style="margin-bottom:20px">Insert</a>
    <div class="row">
      @foreach ($kasir as $item)
      <div class="card mb-3">
        <div class="card-body">
          <table style="margin-bottom: 10px">
            <tr>
              <td><h5 class="card-title">Nama Kasir</h5></td>
              <td>:</td>
              <td><h5 class="card-title">{{ $item->nama_user }}</h5></td>
            </tr>
            <tr>
              <td><p class="card-text">Email</p></td>
              <td>:</td>
              <td><p class="card-text">{{ $item->email }}</p></td>
            </tr>
            <tr>
              <td><p class="card-text">Alamat</p></td>
              <td>:</td>
              <td><p class="card-text">{{ $item->alamat }}</p></td>
            </tr>
            <tr>
              <td><p class="card-text">No. Telp</p></td>
              <td>:</td>
              <td><p class="card-text">{{ $item->no_tlp }}</p></td>
            </tr>
          </table>
          <a href="/kasir/edit/{{ $item->id }}" class="btn btn-warning" style="margin-left:900px">Edit</a>
          <a href="/kasir/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
    </div>
    </div>
    @endforeach 
</div>
</div>

@endsection
