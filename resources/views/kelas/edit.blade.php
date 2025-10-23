@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Kelas</div>

                <div class="card-body">
                    <form action="{{ route('kelas.update', $kelas->id)}}" method="post" enctype="multipart/form-data"7>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" value="{{$kelas->nama_kelas}}">
                            @error('nama')
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection