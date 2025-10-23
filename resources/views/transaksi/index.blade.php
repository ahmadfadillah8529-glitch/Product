@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data transaksi</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                        
                    </div>   
                    @endif
                    <a href="{{route('transaksi.create')}}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal transaksi</th>
                            <th scope="col">Jumlah  </th>
                            <th scope="col">Total Harga </th>
                            <th scope="col">Id barang </th>
                            <th scope="col">Id Pembeli </th>
                            <th scope="col">Action</th>
                            {{-- <th scope="col">Cover</th>
                            <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($transaksi as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->tanggal_transaksi}}</td>
                            <td>{{$data->jumlah}}</td>
                            <td>{{$data->total_harga}}</td>
                            <td>{{$data->barang->nama_barang}}</td>
                            <td>{{$data->pembeli->nama_pembeli}}</td>
                            {{-- <td><img src="{{asset('/images/pengguna/' . $data->cover)}}" width="100" alt=""></td> --}}
                            <td class="d-flex">
                                <a href="{{route('transaksi.edit', $data->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('transaksi.show', $data->id)}}" class="btn btn-warning">Show</a>
                                <form action="{{route('transaksi.destroy', $data->id)}}" method="post">
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