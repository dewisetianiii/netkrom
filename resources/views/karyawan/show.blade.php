@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><h4><b><div class="card-header">Menampilkan Data</div></b></h4></center>
                <div class="card-body">
    <div class="form-group">
        <label for="">Nama Karyawan</label>
        <input class="form-control" value="{{ $karyawan->nama }}" type="text" name="nama" disabled>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $karyawan->alamat }}" type="text" name="alamat" disabled>
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <input class="form-control" value="{{ $karyawan->jabatan }}" type="text" name="jabatan" disabled>
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <input class="form-control" value="{{ $karyawan->jenis_kelamin }}" type="text" name="jenis_kelamin" disabled>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" value="{{ $karyawan->email }}" type="text" name="email" disabled>
    </div>
      <div class="form-group">
        <label for="">Awal Kontrak</label>
        <input class="form-control" value="{{ $karyawan->tanggal_masuk }}" type="date" name="tanggal_masuk" disabled>
    </div>
      <div class="form-group">
        <label for="">Akhir Kontrak</label>
        <input class="form-control" value="{{ $karyawan->akhir_kontrak }}" type="date" name="akhir_kontrak" disabled>
    </div>

    <div class="form-group">
        <a href="{{ url('/karyawan') }}" class="btn btn-warning">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
