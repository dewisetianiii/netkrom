<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\karyawan;
use Session;
use Auth;
class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function cari(Request $request)
    {
	$cari = $request->get('cari');
	$karyawan = DB::table('karyawans')->where('nama', 'like', '%'.$cari.'%')->paginate(5);
	return view('karyawan.index', ['karyawan' => $karyawan]);
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = karyawan::all();
        return view('karyawan.create', compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = new karyawan();
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->email = $request->email;
        $karyawan->tanggal_masuk = $request->tanggal_masuk;
        $karyawan->akhir_kontrak = $request->akhir_kontrak;
        $karyawan->save();
        return redirect()->route('karyawan.index')->with('pesan','Berhasil menyimpan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
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
        $karyawan = karyawan::findOrFail($id);
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->email = $request->email;
        $karyawan->tanggal_masuk = $request->tanggal_masuk;
        $karyawan->akhir_kontrak = $request->akhir_kontrak;
        $karyawan->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah menjadi data <b>$karyawan->nama</b>!"
        ]);
        return redirect()->route('karyawan.index')->with('pesan','Berhasil mengubah data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('pesan','Berhasil menghapus data');
    }
}
