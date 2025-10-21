@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.update', $biodata->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                       <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$biodata->nama_lengkap}}"disabled >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{$biodata->jenis_kelamin}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$biodata->tempat_lahir}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$biodata->agama}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$biodata->alamat}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$biodata->telepon}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$biodata->email}}" disabled>
                        </div>
                        <div class="mb-3">
                           <img src="{{asset('/images/post/' . $biodata->gambar)}}" width="100" alt="">
                        </div>
                        <a href="{{route('biodata.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection