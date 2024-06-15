<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('main.dokter.index');
    }

    public function render()
    {
        $dokter = Dokter::all();

        $view = [
            'data' => view('main.dokter.render', compact('dokter'))->render(),
        ];

        return response()->json($view);
    }

    public function create()
    {
        $view = [
            'data' => view('main.dokter.create')->render(),
        ];

        return response()->json($view);
    }

    public function store(DokterRequest $request)
    {
        try {
            $data = [
                'nama' => $request->nama,
                'sip' => $request->sip,
                'tanggal_lahir' => date_format(date_create($request->input('tanggal_lahir')), 'Y-m-d'),
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_telp' => $request->nomor_telp,
            ];

            Dokter::create($data);

            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan',
                'title' => 'Berhasil'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                // 'message' => $e->getMessage(),
                'message' => 'Terjadi kesalahan!',
                'title' => 'Gagal'
            ]);
        }
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        $view = [
            'data' => view('main.dokter.edit', compact('dokter'))->render(),
        ];

        return response()->json($view);
    }

    public function update(DokterRequest $request)
    {
        try {
            $dokter = Dokter::find($request->id);
            $data = [
                'nama' => $request->nama,
                'sip' => $request->sip,
                'tanggal_lahir' => date_format(date_create($request->input('tanggal_lahir')), 'Y-m-d'),
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_telp' => $request->nomor_telp,
            ];

            $dokter->update($data);

            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan',
                'title' => 'Berhasil'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                // 'message' => $e->getMessage(),
                'message' => 'Terjadi kesalahan!',
                'title' => 'Gagal'
            ]);
        }
    }
}
