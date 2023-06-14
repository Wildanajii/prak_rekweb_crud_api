<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return response()->json($mahasiswa);
    }

    public function store(Request $request)
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
    
    public function show($nim){
        $mahasiswa = mahasiswa::find($nim);
        if (!$mahasiswa){
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }
        return response()->json($mahasiswa);
    }


    public function update(Request $request, $nim){
        $mahasiswa = mahasiswa::find($nim);
        if (!$mahasiswa){
            return response()->json(['message' => 'mahasiswa not found'], 404);
        }
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->save();

        return response()->json($mahasiswa);
    }

    public function destroy($nim){
        $mahasiswa = mahasiswa::find($nim);
        if (!$mahasiswa){
            return response()->json(['message'=>'Mahasiswa not found'], 404);
        }
        $mahasiswa->delete();

        return response()->json(['message'=>'Mahasiswa deleted successfully']);
    }


    
}

