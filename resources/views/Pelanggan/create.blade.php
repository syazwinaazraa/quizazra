@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Daya Pelanggan</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Golongan Pelanggan</label>
                <select name="pel_id_gol" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    @foreach ($golongan as $gol)
                        <option value="{{$gol->gol_id}}">{{$gol->gol_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Akun Pelanggan</label>
                <select name="pel_id_user" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option> 
                    @foreach ($users as $user)
                        <option value="{{$user->user_id}}">{{$user->user_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Nomor Pelanggan</label>
                <input type="text" name="pel_no" class="form-control" placeholder="Nomor Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="pel_nama" class="form-control" placeholder="Nama Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="pel_hp" class="form-control" placeholder="HP Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">KTP Pelanggan</label>
                <input type="text" name="pel_ktp" class="form-control" placeholder="KTP Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Seri Pelanggan</label>
                <input type="text" name="pel_seri" class="form-control" placeholder="Seri Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Meteran Pelanggan</label>
                <input type="text" name="pel_meteran" class="form-control" placeholder="Meteran Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Keterangan Pelanggan</label>
                <select class= "form-control" name="pel_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
            </td>    
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection