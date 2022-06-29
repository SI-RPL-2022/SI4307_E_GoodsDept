@extends('layout')

@section('title', 'Tambah Transaksi')

@section('content')

    <div class="container">
        <h3>Detail Transaksi</h3>
        <div class="card mb-3">
            <div class="card-body">
                <div class="fs-3 mb-3">
                    Kode Transaksi : {{ $transaksi[0]->kode_transaksi }}
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
                    </div>
                @endforeach
                <hr>
                <div class="row ">
                    <div class="col">Total Harga</div>
                    <div class="col-md-3">{{ $transaksi->sum('total_harga') }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
