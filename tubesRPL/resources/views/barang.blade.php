@extends('layout')

@section('title', 'Barang')

@section('content')
    <div class="container" style="margin:20px auto 50px auto">
        <a href="/barang/create" class="btn btn-success">Insert</a>
        <h1 class="text-center">Daftar Barang</h1>
        <div class="row">
            @foreach ($barang as $item)
                <div class="col-sm-3" style="margin-bottom:20px">
                    <div class="card">
                        <center>
                            <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="..."
                                style="height:100px; width:100px; margin-top:20px">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_barang }}</h5>
                            <p class="card-text">{{ $item->stock }}</p>
                            <p class="card-text">{{ $item->harga }}</p>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="/barang/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                <a href="/barang/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                            </center>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
