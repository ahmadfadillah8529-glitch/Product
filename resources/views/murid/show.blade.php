@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.update', $murid->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                       <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{$murid->nama}}"disabled >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{$murid->jk}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$murid->tanggal_lahir}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$murid->tempat_lahir}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$murid->agama}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$murid->alamat}}"disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$murid->email}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" name="id_pengguna" value="{{$murid->kelas->nama_kelas}}" disabled>
                            @error('nomor')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                           <img src="{{asset('/images/post/' . $murid->gambar)}}" width="100" alt="">
                        </div> --}}
                        <a href="{{route('murid.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection