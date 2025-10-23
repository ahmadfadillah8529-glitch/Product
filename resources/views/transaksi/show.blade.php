@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.show', $transaksi->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">tanggal transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}" disabled>
                            @error('tanggal_transaksi')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" disabled>
                            @error('jumlah')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total harga</label>
                            <input type="text" class="form-control" name="total_harga" value="{{$transaksi->total_harga}}" disabled>
                            @error('harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="stok" value="{{$transaksi->barang->nama_barang}}" disabled>
                            @error('id_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" name="stok" value="{{$transaksi->pembeli->nama_pembeli}}" disabled>
                            @error('id_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                       <a href="{{route('transaksi.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection