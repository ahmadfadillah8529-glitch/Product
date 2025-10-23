@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Telepon</div>

                <div class="card-body">
                    <form action="{{ route('telepon.show', $telepon->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{$telepon->nomor}}" disabled>
                            @error('nomor')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" name="id_pengguna" value="{{$telepon->pengguna->nama}}" disabled>
                            @error('nomor')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Cover" >
                             @error('cover')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div> --}}
                       <a href="{{route('telepon.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection