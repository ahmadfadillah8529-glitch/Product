@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}">
                            @error('nama_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <div class="p-1">
                                <input type="radio" id="jk" name="jenis_kelamin" value="Laki-laki" >
                                <span for="jk">Laki-laki</span>
                            </div>
                            <div class="p-1">
                                <input type="radio" id="jk" name="jenis_kelamin" value="Perempuan" >
                                <span for="jk">Perempuan </span>
                            </div>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Stok</label>
                            <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}">
                            @error('telepon')
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