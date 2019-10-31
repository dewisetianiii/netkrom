<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\kinerja;


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
        if (count($kinerja) <= 0) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'kinerja tidak ditemukan'
            ];
            return response()->json($respons, 404);
        }
        $respons = [
            'success' => true,
            'data' => $kinerja,
            'message' => 'Berhasil'
        ];
        return response()->json($respons, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. tampung semua imputan ke $input;
        $input = $request->all();
        //2. Buat validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama_karyawan' => 'required| unique:kinerjas'
        ]);
        // 3. Chek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validator Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        $kinerja = new kinerja;
        $kinerja->nama_karyawan = $request->nama_karyawan;
        $kinerja->slug = str_slug($request->nama_karyawan, '-');
        $kinerja->save();
        // 4. buat fungsi untuk menghandle semua inputan ->
        // dimasukan ke table
        $kinerja = kinerja::create($input);
        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $kinerja,
            'message' => 'kinerja Berhasil ditambahkan.'
        ];
        // 6. tampilkan hasil
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kinerja = kinerja::Find($id);
        if (!$kinerja) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'kinerja tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $response = [
            'success' => true,
            'data' => $kinerja,
            'message' => 'Berhasil.'
        ];
        return response()->json($response, 200);
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
        $kinerja = kinerja::find($id);
        $input = $request->all();
        if (!$kinerja) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'kinerja tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $validator = Validator::make($input, [
            'nama_karyawan' => 'required|min:5'
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validator Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        $kinerja->nama_karyawan = $input['nama_karyawan'];
        $kinerja->save();
        $response = [
            'success' => true,
            'data' => $kinerja,
            'message' => 'kinerja Berhasil ditambahkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kinerja = kinerja::find($id);
        if (!$kinerja) {
            $response = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'kinerja tidak ditemukan'
            ];
            return response()->json($response, 404);
        }
        $kinerja->delete();
        $response = [
            'success' => true,
            'data' => $kinerja,
            'message' => 'kinerja berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}
