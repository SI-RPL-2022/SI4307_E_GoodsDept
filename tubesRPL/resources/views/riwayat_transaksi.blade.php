@extends('layout')

@section('title', 'Transaksi')
@section('content')

    <div class="container">
        @auth
            @if (auth()->user()->level == 2)
            <a href="/transaksi/tambah" class="btn btn-primary mb-3">Tambah Transaksi</a>
            @endif    
        @endauth
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $data => $value)
                    <tr>
                        
                        <td>{{ $data }}</td>
                        <td>{{ $value->sum('jumlah_barang') }}</td>
                        <td>{{ $value->sum('total_harga') }}</td>
                        <td><a href="/transaksi/detail/{{ $data }}" class="btn btn-info">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
