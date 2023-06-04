<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->umur = $request->umur;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kota = $request->kota;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->created_at = $request->created_at;
        $mahasiswa->updated_at = $request->updated_at;
        $mahasiswa->save();
        return response()->json($mahasiswa);
    }

    public function read()
    {
        $mahasiswa = mahasiswa::all();
        return response()->json($mahasiswa);
    }
}

