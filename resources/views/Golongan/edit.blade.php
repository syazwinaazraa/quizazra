@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Golongan</h3>
        <form action="{{ url('/golongan/' .$row->gol_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Kode Golongan</label>
                <input type="text" name="gol_kode" class="form-control" value="{{$row->gol_kode}}">
            </div>
            <div class="mb-3">
                <label for="">Nama Golongan</label>
                <input type="text" name="gol_nama" class="form-control" value="{{$row->gol_nama}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection