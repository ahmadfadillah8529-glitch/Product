@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}">
                            @error('tanggal_transaksi')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Jumlah Transaksi</label>
                            <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}">
                            @error('jumlah')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total Harga </label>
                            <input type="text" class="form-control" name="total_harga" value="{{$transaksi->total_harga}}">
                            @error('total_harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select class="form-control" name="id_barang" id="">
                                @foreach ($barang as $data)
                                <option value="{{$data->id}}" {{ $data->id == $transaksi->id_barang ? 'selected': ''}}>{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <select class="form-control" name="id_pembeli" id="">
                                @foreach ($pembeli as $data)
                                <option value="{{$data->id}}" {{ $data->id == $transaksi->id_pembeli ? 'selected': ''}}>{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Cover" >
                             @error('cover')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection