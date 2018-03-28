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
        return redirect('/table02');
    }

    function table02(){
        $siswa = siswasModel::all();                
        return view('/siswa/table')
        ->with('siswa',$siswa)
        ->with('no',1);
    }

    function delete($id){
        $siswa = siswasModel::find($id);
        //jika ingin menggunakn nama
        //$sisw = $siswasModel::where('nama', '=' , $id);
        $siswa->delete();

        return redirect('/table02')
            ->with('message', 'sukses hapus data');
    }

    function edit($id){
        //jika pakai first bisa langsung tanpa dialisain di html nya tanpa foreach
        $siswa = siswasModel::where('id','=',$id)->first();

        //dd($siswa);

        return view('/siswa/edit')
        ->with('siswa', $siswa);
    }

    function update(Request $request, $id){
        //jika pakai first bisa langsung tanpa dialisain di html nya tanpa foreach
        $siswa = siswasModel::find($id);

            $siswa->nama    = $request->nama_siswa;
            $siswa->alamat  = $request->alamat_siswa;
            $siswa->no_telp = $request->no_telp_siswa;
        
        $siswa->save();

        return redirect('/table02');
    }
    
}
