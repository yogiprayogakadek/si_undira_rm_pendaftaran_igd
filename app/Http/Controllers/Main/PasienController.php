<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('main.pasien.index');
    }

    public function render()
    {
        $pasien = Pasien::all();

        $view = [
            'data' => view('main.pasien.render', compact('pasien'))->render(),
        ];

        return response()->json($view);
    }

    public function create()
    {
        $view = [
            'data' => view('main.pasien.create')->render(),
        ];

        return response()->json($view);
    }

    public function store(PasienRequest $request)
    {
        try {
            $data = [
                'nomor_rm' => $request->nomor_rm,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tanggal_lahir' => date_format(date_create($request->input('tanggal_lahir')), 'Y-m-d'),
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_rm' => $request->nomor_rm,
                'nomor_telp' => $request->nomor_telp,
            ];

            Pasien::create($data);

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
        $pasien = Pasien::find($id);
        $view = [
            'data' => view('main.pasien.edit', compact('pasien'))->render(),
        ];

        return response()->json($view);
    }

    public function update(PasienRequest $request)
    {
        try {
            $pasien = Pasien::find($request->id);
            $data = [
                'nomor_rm' => $request->nomor_rm,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tanggal_lahir' => date_format(date_create($request->input('tanggal_lahir')), 'Y-m-d'),
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_rm' => $request->nomor_rm,
                'nomor_telp' => $request->nomor_telp,
            ];

            $pasien->update($data);

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

    public function detail($id)
    {
        $pasien = Pasien::find($id);

        return response()->json($pasien);
    }
}
