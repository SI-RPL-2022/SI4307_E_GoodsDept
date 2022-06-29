@extends('layout')

@section('title','Kasir') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
  <h1 class="text-center">Kasir</h1>
  <a href="/kasir/create" class="btn btn-success">Insert</a>
    @foreach ($kasir as $item)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $item->nama_user }}</h5>
          <p class="card-text">{{ $item->email }}</p>
          <p class="card-text">{{ $item->alamat }}</p>
          <p class="card-text">{{ $item->no_tlp }}</p>
          <a href="/kasir/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
          <a href="/kasir/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
    </div>
    @endforeach  
  
  
</div>
</div>

@endsection
