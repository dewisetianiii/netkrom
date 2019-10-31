@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data karyawan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <center><h4><b><div class="card-header">Tambah Data</div></b></h4></center>
                    <div class="card-body">
                    <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" name="nama" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div>
                        <legend>Jenis Kelamin</legend>
                       </p><input type="radio"  name="jenis_kelamin" value='laki-laki'/>Laki-Laki</p>
                       </p><input type="radio"  name="jenis_kelamin" value='perempuan'/>Perempuan</p>
                        <br>
                        </div>
                        <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Masuk kontrak</label>
                                <input type="date" name="tanggal_masuk" class="form-control" required>
                            </div>
                       <div class="form-group">
                                <label for="">Akhir kontrak</label>
                                <input type="date" name="akhir_kontrak" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning"
                            href="{{ route('karyawan.index') }}" role="button">Kembali</a>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
