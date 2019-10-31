@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><h4><b><div class="card-header">Mengubah Data</div></b></h4></center>
                <div class="card-body">
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
   <div class="form-group">
        <label for="">Nama Karyawan</label>
        <input class="form-control" value="{{ $karyawan->nama }}" type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="">alamat</label>
        <input class="form-control" value="{{ $karyawan->alamat }}" type="text" name="alamat">
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <input class="form-control" value="{{ $karyawan->jabatan }}" type="text" name="jabatan">
    </div>
     <div>
    <legend>Jenis Kelamin</legend>
    </p><input type="radio"  name="jenis_kelamin" value='laki-laki'/>Laki-Laki</p>
    </p><input type="radio"  name="jenis_kelamin" value='perempuan'/>Perempuan</p>
    <br>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" value="{{ $karyawan->email }}" type="text" name="email">
    </div>
      <div class="form-group">
        <label for="">Awal Kontrak</label>
        <input class="form-control" value="{{ $karyawan->tanggal_masuk }}" type="date" name="tanggal_masuk">
    </div>
      <div class="form-group">
        <label for="">Akhir Kontrak</label>
        <input class="form-control" value="{{ $karyawan->akhir_kontrak }}" type="date" name="akhir_kontrak">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/karyawan') }}" class="btn btn-warning">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
