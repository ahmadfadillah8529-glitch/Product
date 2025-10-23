@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.show', $barang->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}" disabled>
                            @error('nama_barang')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{$barang->merek}}" disabled>
                            @error('merek')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$barang->harga}}" disabled>
                            @error('harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{$barang->stok}}" disabled>
                            @error('stok')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                       <a href="{{route('barang.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection