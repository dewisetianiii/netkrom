<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ ('assets/backend/img/favicon.png') }}">

  <title>PT.Netkrom Solusindo</title>

  <!-- Bootstrap CSS -->
  <link href="{{ ('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ ('assets/backend/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ ('assets/backend/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ ('assets/backend/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ ('assets/backend/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ ('assets/backend/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ ('assets/backend/css/fullcalendar.css') }}">
  <link href="{{ ('assets/backend/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ ('assets/backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ ('assets/backend/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ ('assets/backend/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ ('assets/backend/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('jago', 'PT.Netkrom Solusindo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


	<link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="https://netkromsolution.com" class="logo">PT.Netkrom Solusindo <span class="lite"></span></a>
      <!--logo end-->

      <br>
    <div class="nav justify-content-end">
        <form action="/search" method="get">
          <div class="input-group">
            <input type="search" name="search" placeholder="SearchNameKaryawan..." class"form-control">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary">Search</button>
            </span>
          </div>
        </form>
    </div>

        <!--  search form end -->
      
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sidebar-menu">
            <a href="karyawan" class="">
                          <i class="icon_document_alt"></i>
                          <span>EvaluasiKaryawan</span>
                      </a>
          </li>
          <li class="sidebar-menu">
            <a href="kinerja" class="">
                          <i class="icon_documents_alt"></i>
                          <span>PenilaianKinerja</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Penilaian Kinerja Karyawan</h3>
          </div>
        </div>


<div class="container">
<body style="background-image: url(assets/img/bg2.jpg); background-size:100%">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <center><h5><b><div class="p-3 mb-2 bg-danger text-white">FORMULIR PENILAIAN KINERJA</div></b></h5></center>
                 <center><img src="{{ ('assets/img/logo.jpg') }}" style="margin-left: auto;width:25%;" alt="Tri"></center>
                <center>

                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

               

 <?php
        $tanggal= mktime(date("m"),date("d"),date("Y"));
                echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b>";
                date_default_timezone_set('Asia/Jakarta');
                $jam=date("H:i:s");
                echo "| Pukul : <b>". $jam." "."</b>";
                $a = date ("H");
                if (($a>=6) && ($a<=11)){
                echo "<b>,Selamat Pagi </b>";
                }
                else if(($a>11) && ($a<=12))
                {
                echo ", Selamat Pagi ";}
                else if (($a>12) && ($a<=18)){
                echo ", Selamat Siang ";}
                else { echo ", <b> Selamat Malam </b>";}
    ?>
    <br><br> 
    </center>
    

                <center>
                <a href="{{ route('kinerja.create') }}">
						<button class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data </button></a>
                </center>
                <br>
                
                    <div class="table-responsive">
                    @if(session('pesan'))
                    <div class="alert alert-info">
                    <b></b>{{ session('pesan') }}
                    </div>
                    @endif
                        <table class="table table-bordered table-striped">
                            <tr class="success">
                                <th>No</th>
                                <th>Periode Penilaian</th>
                                <th>Nama Penilai</th>
                                <th>Tanggal </th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Departemen</th>
                                <th>Deskripsi Pekerjaan</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                            
                @php $no =1; @endphp
                @foreach($kinerja as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->periode_penilaian }}</td>
                    <td>{{ $data->nama_penilai }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->nama_karyawan }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->departemen }}</td>
                    <td>{{ $data->deskripsi_pekerjaan }}</td>
                    <td><a href="{{ route('kinerja.show', $data->id) }}">
						        <button class="btn btn-success btn-sm"> <i class="fa fa-search"></i> Detail </button></a></td>
                    <td><form action="{{ route('kinerja.destroy', $data->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
