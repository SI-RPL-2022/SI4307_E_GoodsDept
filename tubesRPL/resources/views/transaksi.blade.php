@extends('layout')

@section('title', 'Tambah Transaksi')

@section('content')
    <div class="container" style="margin:20px auto 50px auto">
        
        <h1 class="text-center">Tambah Transaksi</h1>
        <form action="/transaksi/tambah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-8">
                    <label for="exampleFormControlInput1" class="form-label">Pilih Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="exampleFormControlInput1"
                        list="datalistOptions">
                    <datalist id="datalistOptions">
                        @foreach ($barang as $item)
                            <option value="{{ $item->nama_barang }}">{{ $item->id }}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" name="jumlah_barang" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </div>

        </form>
        <div class="card mb-3">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col fs-3 ">
                        Kode Transaksi : {{ session()->get('kode') }}
                    </div>
                    <div class="col-md-2">
                        <a href="/transaksi/batal/{{ session()->get('kode') }}" class="btn btn-danger">Batalkan
                            Transaksi</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="mb-3 col">
                        <p class="card-text">Nama Barang</p>
                    </div>
                    <div class="mb-3 col">
                        <p class="card-text">Harga Barang</p>
                    </div>
                    <div class="mb-3 col">
                        <p class="card-text">Jumlah Barang</p>
                    </div>
                    <div class="mb-3 col">
                        <p class="card-text">Total Harga Barang</p>
                    </div>
                    <div class="mb-3 col-md-1">
                        <p class="card-text">Action</p>
                    </div>
                </div>
                @foreach ($transaksi as $data)
                    <div class="row">
                        <div class="mb-3 col">
                            <p class="card-text">{{ $data->barang->nama_barang }}</p>
                        </div>
                        <div class="mb-3 col">
                            <p class="card-text">{{ $data->barang->harga }}</p>
                        </div>
                        <div class="mb-3 col">
                            <p class="card-text">{{ $data->jumlah_barang }}</p>
                        </div>
                        <div class="mb-3 col">
                            <p class="card-text">{{ $data->total_harga }}</p>
                        </div>
                        <div class="mb-3 col-md-1">
                            <a href="/transaksi/delete/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                @endforeach
                <hr>
                <div class="row mb-3">
                    <div class="col ">Total Harga</div>
                    <div class="col-md-3">{{ $transaksi->sum('total_harga') }}</div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="/transaksi/print" class="btn btn-warning">Print</a>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
