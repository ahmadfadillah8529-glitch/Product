@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.store')}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <div class="p-1">
                                <input type="radio" id="jk" name="jk" value="Laki-laki" >
                                <span for="jk">Laki-laki</span>
                            </div>
                            <div class="p-1">
                                <input type="radio" id="jk" name="jk" value="Perempuan" >
                                <span for="jk">Perempuan </span>
                            </div>
                            @error('jk')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            @error('tanggal_lahir')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            @error('tempat_lahir')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Agama</label>
                            <div class="">
                                <select name="agama" class="form-control" id="">
                                    <option value="Islam" name="agama">Islam</option>
                                    <option value="Kristen" name="agama">Kristen</option>
                                    <option value="Hindu" name="agama">Hindu</option>
                                    <option value="Katolik" name="agama">Katolik</option>
                                    <option value="Budha" name="agama">Budha</option>
                                </select>
                            </div>
                         <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" cols="30" rows="8" placeholder="Alamat"></textarea>
                            @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Email</label>
                            <input type="email" class="form-control" name="email" placeholder=" Email">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <select class="form-control" name="id_kelas" id="">
                                @foreach ($kelas as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
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