@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Golongan</h3>
        <form action="{{ url('/golongan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Kode Golongan</label>
                <input type="text" name="gol_kode" class="form-control" placeholder="Kode Golongan">
            </div>
            <div class="mb-3">
                <label for="">Nama Golongan</label>
                <input type="text" name="gol_nama" class="form-control" placeholder="Nama Golongan">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection