@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store')}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" placeholder="Tanggal transaksi">
                            @error('tanggal_transaksi')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah transaksi</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="Jumlah transaksi">
                            @error('jumlah_transaksi')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" name="total_harga" placeholder="Total Harga">
                            @error('total_harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Id barang</label>
                            <select class="form-control" name="id_barang" id="">
                                @foreach ($barang as $data)
                                <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Id pembeli</label>
                            <select class="form-control" name="id_pembeli" id="">
                                @foreach ($pembeli as $data)
                                <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection