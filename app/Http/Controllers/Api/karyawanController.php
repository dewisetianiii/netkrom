<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\karyawan;

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
        if (count($karyawan) <= 0) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'karyawan tidak ditemukan'
            ];
            return response()->json($respons, 404);
        }
        $respons = [
            'success' => true,
            'data' => $karyawan,
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
            'nama' => 'required| unique:karyawans'
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
        $karyawan = new karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->slug = str_slug($request->nama, '-');
        $karyawan->save();
        // 4. buat fungsi untuk menghandle semua inputan ->
        // dimasukan ke table
        $karyawan = karyawan::create($input);
        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $karyawan,
            'message' => 'karyawan Berhasil ditambahkan.'
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
        $karyawan = karyawan::Find($id);
        if (!$karyawan) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'karyawan tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $response = [
            'success' => true,
            'data' => $karyawan,
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
        $karyawan = karyawan::find($id);
        $input = $request->all();
        if (!$karyawan) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'karyawan tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $validator = Validator::make($input, [
            'nama' => 'required|min:5'
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validator Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        $karyawan->nama = $input['nama'];
        $karyawan->save();
        $response = [
            'success' => true,
            'data' => $karyawan,
            'message' => 'karyawan Berhasil ditambahkan.'
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
        $karyawan = karyawan::find($id);
        if (!$karyawan) {
            $response = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'karyawan tidak ditemukan'
            ];
            return response()->json($response, 404);
        }
        $karyawan->delete();
        $response = [
            'success' => true,
            'data' => $karyawan,
            'message' => 'karyawan berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}
