<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kinerja;
use Session;

class kinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinerja = kinerja::all();
        return view('kinerja.index', compact('kinerja'));
    }

    public function search(Request $request)
    {
	$search = $request->get('search');
	$kinerja = DB::table('kinerjas')->where('nama_karyawan', 'like', '%'.$search.'%')->paginate(5);
	return view('kinerja.index', ['kinerja' => $kinerja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kinerja = kinerja::all();
        return view('kinerja.create', compact('kinerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kinerja = new kinerja();
        $kinerja->periode_penilaian = $request->periode_penilaian;
        $kinerja->nama_penilai = $request->nama_penilai;
        $kinerja->tanggal = $request->tanggal;
        $kinerja->nama_karyawan = $request->nama_karyawan;
        $kinerja->jabatan = $request->jabatan;
        $kinerja->departemen = $request->departemen;
        $kinerja->deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
        $kinerja->nilai1 = $request->nilai1;
        $kinerja->nilai2 = $request->nilai2;
        $kinerja->nilai3 = $request->nilai3;
        $kinerja->nilai4 = $request->nilai4;
        $kinerja->nilai5 = $request->nilai5;
        $kinerja->nilai6 = $request->nilai6;
        $kinerja->nilai7 = $request->nilai7;
        $kinerja->nilai8 = $request->nilai8;
        $kinerja->nilai9 = $request->nilai9;
        $kinerja->nilai10 = $request->nilai10;
        $kinerja->keterangan1 = $request->keterangan1;
        $kinerja->keterangan2 = $request->keterangan2;
        $kinerja->keterangan3 = $request->keterangan3;
        $kinerja->keterangan4 = $request->keterangan4;
        $kinerja->keterangan5 = $request->keterangan5;
        $kinerja->keterangan6 = $request->keterangan6;
        $kinerja->keterangan7 = $request->keterangan7;
        $kinerja->keterangan8 = $request->keterangan8;
        $kinerja->keterangan9 = $request->keterangan9;
        $kinerja->keterangan10 = $request->keterangan10;
        $kinerja->jumlah = $request->jumlah;
        $kinerja->sangat_baik = $request->sangat_baik;
        $kinerja->baik = $request->baik;
        $kinerja->cukup = $request->cukup;
        $kinerja->kurang = $request->kurang;
        $kinerja->sangat_kurang = $request->sangat_kurang;
        $kinerja->rangkuman_evaluasi = $request->rangkuman_evaluasi;
        $kinerja->rekomendasi = $request->rekomendasi;
        $kinerja->save();
        return redirect()->route('kinerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kinerja = kinerja::findOrFail($id);
        return view('kinerja.show', compact('kinerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kinerja = kinerja::findOrFail($id);
        $kinerja->delete();
        return redirect()->route('kinerja.index')->with('pesan','Berhasil menghapus data');
    }
}
