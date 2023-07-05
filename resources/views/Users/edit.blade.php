@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Pengguna</h3>
        <form action="{{ url('/users/' .$row->user_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Email Pengguna</label>
                <input type="text" name="user_email" class="form-control" value="{{$row->user_email}}">
            </div>
            <div class="mb-3">
                <label for="">Password Pengguna</label>
                <input type="password" name="user_password" class="form-control" value="{{$row->user_password}}">
            </div>
            <div class="mb-3">
                <label for="">Nama Pengguna</label>
                <input type="text" name="user_nama" class="form-control" value="{{$row->user_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pengguna</label>
                <input type="text" name="user_alamat" class="form-control" value="{{$row->user_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">HP Pengguna</label>
                <input type="text" name="user_hp" class="form-control" value="{{$row->user_hp}}">
            </div>
            <div class="mb-3">
                <label for="">POS Pengguna</label>
                <input type="text" name="user_pos" class="form-control" value="{{$row->user_pos}}">
            </div>
            <div class="mb-3">
                <label for="">Akun Pengguna</label>
                <select class= "form-control" name="user_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
            </td>  
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection