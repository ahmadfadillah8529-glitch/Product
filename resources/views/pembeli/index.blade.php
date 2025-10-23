@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pembeli</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                        
                    </div>   
                    @endif
                    <a href="{{route('pembeli.create')}}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama pembeli</th>
                            <th scope="col">jenis Kelamin </th>
                            <th scope="col">Telepon </th>
                            <th scope="col">Action</th>
                            {{-- <th scope="col">Cover</th>
                            <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pembeli as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama_pembeli}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->telepon}}</td>
                            {{-- <td><img src="{{asset('/images/pengguna/' . $data->cover)}}" width="100" alt=""></td> --}}
                            <td class="d-flex">
                                <a href="{{route('pembeli.edit', $data->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('pembeli.show', $data->id)}}" class="btn btn-warning">Show</a>
                                <form action="{{route('pembeli.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                </form>
                            </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection