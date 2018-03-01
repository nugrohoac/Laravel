<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswaModel;
use App\siswasModel;

class ContohController extends Controller
{
    function tampilkan($qc){
        return view('content_lain')
        ->with('param',$qc);
    }

    function input(){
        return view('input_form');
    }

    function input_post(Request $request){
        $nama = $request->nama;
        $alamat = $request->alamat;
        $telf = $request->telf;

        return view('view_form')
        ->with('nama',$nama)
        ->with('alamat',$alamat)
        ->with('telf',$telf);
    }

    function table(){

        $mahasiswa = mahasiswaModel::all();
        $name = "quick count indobarometer";

        return view('table')
        ->with('mahasiswa',$mahasiswa)
        ->with('nug',$name);
    }

    function form(){
        return view('siswa/inputSiswa');
    }

    function insert(Request $request){
        $siswa = new siswasModel;

            $siswa->nama    = $request->nama_siswa;
            $siswa->alamat  = $request->alamat_siswa;
            $siswa->no_telp = $request->no_telp_siswa;
        
        $siswa->save();
        return redirect('siswa');
    }

    function table02(){
        $siswa = siswasModel::all();                
        return view('/siswa/table')
        ->with('siswa',$siswa)
        ->with('no',1);
    }
}
