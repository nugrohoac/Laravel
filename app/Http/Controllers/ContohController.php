<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswaModel;

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
        return view('input');
    }
}
