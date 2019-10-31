@extends('layouts.app')

@section('content')

<title>Formulir Penilaian Kinerja</title>
<div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <center><h4><b><div class="card-header">Tambah Data</div></b></h4></center>
                    <div class="card-body">
                    <form action="{{ route('kinerja.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">Periode Penilaian :</label>
                    <input type="text" name="periode_penilaian" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Tanggal :</label>
                    <input type="date" name="tanggal"  class="form-control" required>
                </div>
                </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">Nama Penilai :</label>
                    <input type="text" name="nama_penilai" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Nama Karyawan :</label>
                    <input type="text" name="nama_karyawan"  class="form-control" required>
                </div>
                </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">Jabatan :</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Departemen :</label>
                    <input type="text" name="departemen"  class="form-control" required>
                </div>
                </div>
                <div class="col-md-9 mb-5">
                        <label for="">Deskripsi Pekerjaan : </label>
                        <input type="text" name="deskripsi_pekerjaan" class="form-control" required>
                        </div>

                <center><h6><b>UNSUR YANG DINILAI</b><h6></center>
               <br>
               <h6><b>1.Quality/Kualitas kerja</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai1" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Hasil kinerja sangat baik dan menyesuaikan lebih awal dari waktu
                            yang ditentukan dilihat dari tingkat akurasi,kerapihan,kebersihan,
                            dan kelengkapannya.</th>
                <th colspan="3">Hasil kerja baik dan akurat</th>
                <th colspan="3">Hasil kerja cukup baik,namun masih kurang lengkap dan akurat</th>
                <th colspan="3">Hasil kerja belum sebaik yang diharapkan</th>
                <th colspan="3">Hasil kerja tidak baik,sering mengulangi kesalahan yang sama.</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan1" class="form-control" required>
                <br>
                <br>
                <br>
                      


               <h6><b>2.Kualitas kerja (Menilai kualitas tugas yang diselesaikan
               berdasarkan standar output/target yang ditetapkan untuk tugas).</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai2" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Jumlah Hasil kerja lebih dari batas yang diharapkan dan mampu
               membantu pekerjaan lain yang berkaitan langsung atau tidak langsung dengan
               bagiannya dengan hasil kerja yang memuaskan</th>
                <th colspan="3">Jumlah hasil kerja sudah dalam batas yang diharapkan namun
                belum efektif dalam penggunaan waktu</th>
                <th colspan="3">Jumlah hasil kerja masih dalam batas yang diharapkan,namun belum
                efektif dalam penggunaan waktu</th>
                <th colspan="3">Jumlah hasil kerja terbatas,bekerja hanya karena intruksi</th>
                <th colspan="3">Sangat lambat/tidak mampu menyelesaikan sebagian besar tugas-tugas
                yang menjadi tanggung jawabnya,jumlah hasil kerja sedikit.</th>
               </tr>
               </table>
                <br>

                <label for="">Keterangan:</label>
                <input type="text" name="keterangan2" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>3.Kemampuan dalam menyelesaikan pekerjaan</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai3" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Mampu menyelesaikan pekerjaan lebih awal dari waktu yang ditentukan</th>
                <th colspan="3">Mampu menyelesaikan pekerjaan yang diberikan sesuai dengan target
                waktu/jadwal yang ditentukan</th>
                <th colspan="3">Cukup mampu menyelesaikan pekerjaan yang diberikan namun belum selesai
                dengan target yang diberikan/jadwal yang ditentukan</th>
                <th colspan="3">Kurang mampu menyelesaikan pekerjaan yang diberikan</th>
                <th colspan="3">Tidak mampu menyelesaikan pekerjaan yang diberikan</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan3" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>4.Work Attitude and Dicipline(sikap kerja dan kedisiplinan)</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai4" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Bekerja dengan antusias,energik dan rajin sehingga memberi pengaruh
               positif pada rekan kerja yang lain. penuh loyalitas dalam menjalankan peraturan
               dan prosedur kerja</th>
                <th colspan="3">Energik dan rajin,penuh loyalitas dalam menjalankan peraturan
                dan prosedur kerja</th>
                <th colspan="3">Rajin dan loyalitas dalam menjalankan peraturan dan prosedur kerja</th>
                <th colspan="3">Kurang rajin,hanya menjalankan peraturan dan prosedur kerja</th>
                <th colspan="3">Tidak rajin,tidak mengikuti peraturan dan prosedur kerja</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan4" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>5.Kehadiran Kerja</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai5" class="form-control" required></td>
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Alpa=0, Terlambat 0 kali, sering izin jam kerja,(izin datang
               terlambat/izin pulang cepat)</th>
            <th colspan="3">Alpa=0,Terlambat > 3 kali,sering Izin jam kerja, (izin datang terlambat/
            izin pulang cepat)</th>
                <th colspan="3">Alpa=0,Terlambat > 6 kali,sering izin jam kerja,(izin datang terlambat/
                izin pulang cepat)</th>
                <th colspan="3">Alpa=1,Terlambat > 9 kali,sering izin jam kerja,(izin datang terlambat/
                izin pulang cepat)</th>
                <th colspan="3">Alpa=2,Terlambat > 12 kali,sering izin jam kerja,(izin datang terlambat/
                izin pulang cepat)</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan5" class="form-control" required>
                <br>
                <br>
                <br>

                 <h6><b>6.Kemampuan Pribadi</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai6" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Kemampuan pribadi sangat terpuji,berinisiatif,kreatif,proaktif luar
               biasa,konsisten dalam pengembangan diri.</th>
            <th colspan="3">Kemampuan pribadi baik sekali.inisiatif,kreatif,proaktif tinggi,konsisten
            dalam mengembangan diri</th>
                <th colspan="3">Kemampuan pribadi rata-rata dapat diterima.inisiatif,kreatif,proaktif,
                terlihat,tetapi kadagkala masih perlu bimbingan</th>
                <th colspan="3">Kemampuan pribadi sering dibawah rata-rata. inisiatif,kreatif,proaktif
                masih perlu terus bimbingan dan dikembangkan</th>
                <th colspan="3">Tidak bisa berinisiatif,tidak menunjang usaha perbaikan cara kerja,
                tidak dapat memecahkan masalah,pasif,tidak kreatif.</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan6" class="form-control" required>
                <br>
                <br>
                <br>

                 <h6><b>7.Kerja sama dengan rekan kerja departemen dan/atau tim kerja dalam depertemen yang sama</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai7" class="form-control" required></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Mampu menciptakan dan membina hubungan kerja sama secara positif dengan
               jaringan uit kerja yang lebih jelas,terbuka untuk memberi dan menerima saran.</th>
            <th colspan="3">Mampu membina hubungan kerja sama secara positif dan terbuka untuk memberi
            dan menerima saran</th>
                <th colspan="3">Mampu menerima kerjasama secara positif dan terbuka menerima saran
                namun tidak memberi saran</th>
                <th colspan="3">Mampu menerima kerjasama dan tidak mau menerima saran</th>
                <th colspan="3">Tidak memperhatikan hubungan/kerjasama</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan7" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>8.Daya Analisa & Logika(Menilai Kemampuan untuk berfikir analitis,objectif,dan logis)</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai8" class="form-control" required></td> 
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Daya analisa sangat tajam. konsisten menerangkan analisa yang sistematis,
               objektif,logis berdasarkan fakta dan sasaran tugas.</th>
            <th colspan="3">Memiliki daya analisa yang baik. Hasil kerjanya objektif,sistematis.
            Dalam hal yang kompleks kadangkala masih perlu arahan.</th>
                <th colspan="3">Secara umum hasil kerjanya sistematis logis,objektif,tetapi
                kadangkala masih perlu dibimbing.</th>
                <th colspan="3">Kadangkala hasil analisanya kurang berbobot.Hasil kerjanya belum
                didukung dengan analisa dan sistematika yang baik</th>
                <th colspan="3">Tidak dapat berfikir analitis atau sistematis.Gagal untk mencapai
                sasaran tugas</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan8" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>9.inisiatif Kerja</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai9" class="form-control" required></td></td>  
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Banyak menghasilkan metode baru yang sistematisdan telah di terapkan
               sesuai dengan kebutuhan perusahaan</th>
            <th colspan="3">Selalu dapat diharapkan untuk mengembangkan gagasan dan solusi kreatif</th>
                <th colspan="3">Mampu mengusulkan metde baru,namun belum dapat memaksimalkan
                penggunaan metode baru tersebut</th>
                <th colspan="3">Tidak memiliki metode baru,hanya mampu mendukung metode baru yang
                bukan hasil pemikirannya sendiri.</th>
                <th colspan="3">Tidak memiliki metode baru,hanya menjalankan rutinitas saja</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan9" class="form-control" required>
                <br>
                <br>
                <br>

                <h6><b>10.Kemampuan membuat skala prioritas</b></h6>

               <table border="1">
               <tr>
               <th  scope="col">Nilai</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="nilai10" class="form-control" required></td> 
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>
                  
                 <tr> 
               <th colspan="3">Unggul dalam memisahkan antara aktivitas yang berprioritas tinggi
               dan rendah</th>
            <th colspan="3">Diatas rata-rata dalam memprioritaskan tugas-tugas,aktifitas dan tujuan</th>
                <th colspan="3">selalu dalam situasi propestik yang layak</th>
                <th colspan="3">Kurang dalam membuat determinasi2 prioritas</th>
                <th colspan="3">Tidak mampu mencapai tingkat pemrioritasan program yang dapat diterima.</th>
               </tr>
               </table>
                <br>
                <label for="">Keterangan:</label>
                <input type="text" name="keterangan10" class="form-control" required>
                <br>
                <br>
                <br>

                <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <center><h5><b><div class="card-header">HASIL PENILAIAN KINERJA KESELURUHAN</div></b></h5></center>
                    <div class="card-body">

                <table border="1">
               <tr>
               <th  scope="col">JUMLAH UNSUR YANG DINILAI</th>  
                <th colspan="3">SANGAT BAIK</th>  
                <th colspan="3">BAIK</th>  
                <th colspan="3">CUKUP</th>
                <th colspan="3">KURANG</th>
                <th colspan="3">SANGAT KURANG</th>
               </tr>
               <tr>
            <tr>  
                <td rowspan="6"><input type="number" name="jumlah" class="form-control" required></td> 
            </tr> 
            
               <th>100</th>
               <th>95</th>
               <th>90</th>
               <th>85</th>
               <th>80</th>
               <th>75</th>
               <th>70</th>
               <th>65</th>
               <th>60</th>
               <th>55</th>
               <th>50</th>
               <th>45</th>
               <th>40</th>
               <th>35</th>
               <th>30</th>
               </tr>
               <tr>

               <th colspan="3"><input type="number" name="sangat_baik" class="form-control" required></th>
               <th colspan="3"><input type="number" name="baik" class="form-control" required></th>
               <th colspan="3"><input type="number" name="cukup" class="form-control" required></th>
               <th colspan="3"><input type="number" name="kurang" class="form-control" required></th>
               <th colspan="3"><input type="number" name="sangat_kurang" class="form-control" required></th>
                             </table>
                <div class="col-md-9 mb-5">
                        <label for="">Rangkuman Evaluasi : </label>
                        <input type="text" name="rangkuman_evaluasi" class="form-control" required>
                        </div>

                <div class="col-md-9 mb-5">
                        <label for="">Rekomendasi : </label>
                        <input type="text" name="rekomendasi" class="form-control" required>
                        </div>

                <button type="submit" class="btn btn-md btn-info">Simpan</button>
                 <a name="" id="" class="btn btn-md btn-warning"
                            href="{{ route('kinerja.index') }}" role="button">Kembali</a>
                        
            </div>
        </div>
    </div>
</div>
@endsection
