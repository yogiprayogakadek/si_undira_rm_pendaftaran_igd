<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index()
    {
        return view('main.dokumen.index');
    }

    public function render()
    {
        $pasien = Pasien::all();

        $view = [
            'data' => view('main.dokumen.render', compact('pasien'))->render(),
        ];

        return response()->json($view);
    }

    public function create()
    {
        $pasien = Pasien::all()->pluck('nama', 'id')->prepend('Pilih nama pasien....', '');
        $dokter = Dokter::all()->pluck('nama', 'id')->prepend('Pilih nama dokter....', '');
        $view = [
            'data' => view('main.dokumen.create', compact('pasien'))->render(),
        ];

        return response()->json($view);
    }
}
