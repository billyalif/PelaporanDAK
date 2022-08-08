<?php

namespace App\Http\Controllers;

use App\Models\Satker;
use App\Models\TabelUser;
use App\Models\User;
use Illuminate\Http\Request;

class SatkerController extends Controller
{
    public function index(){
        $id =  auth()->user()->id;
        $tabel_satker = Satker::where('id_user',$id)->get();
        $tabel_user= TabelUser::all();
        return view('satker-data',
            ['tabel_satker'=>$tabel_satker,
            'tabel_user'=>$tabel_user,
            'title' => 'Data Satker']);
    }


    public function insert(){
        $kk = TabelUser::all();
        return view('satker-create',
        ['title' => 'Tambah Satker']);
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'id_user' => 'required',
            'nama_satker'  => 'required',
            'alamat_satker'  => 'required',
            'notelp_satker'  => 'required',
            'pj_satker'  => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Satker::create($validatedData);

        $request->session()->flash('success', 'Kegiatan berhasil ditambahkan');
        return redirect('/satker');
    }

    public function edit(){
        $kegiatan   = Satker::all();
        return view('kegiatan-update',[
            'title' => 'Edit Satker',
            'kegiatan' => $kegiatan
        ]);
    }

    public function update(){

    }

    public function destroy(){

    }

}
