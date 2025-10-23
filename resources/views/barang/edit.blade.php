@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
                            @error('nama_barang')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{$barang->merek}}">
                            @error('merek')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$barang->harga}}">
                            @error('harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{$barang->stok}}">
                            @error('stok')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection