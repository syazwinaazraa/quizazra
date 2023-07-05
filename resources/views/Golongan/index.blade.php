@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Daftar Golongan</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Kode Golongan</th>
                <th>Nama Golongan</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->gol_id}}</td>
                <td>{{ $row->gol_kode}}</td>
                <td>{{ $row->gol_nama}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('golongan/' .$row->gol_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' .$row->gol_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection