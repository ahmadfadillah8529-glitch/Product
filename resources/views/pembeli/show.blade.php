@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.show', $pembeli->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}" disabled>
                            @error('nama_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{$pembeli->jenis_kelamin}}" disabled>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}" disabled>
                            @error('telepon')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                       <a href="{{route('pembeli.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection