<?php

namespace App\Http\Controllers;

use App\Models\Satker;
use App\Models\TabelUser;
use App\Models\User;
use Illuminate\Http\Request;

class SatkerController extends Controller
{
    public function index(){
        $tabel_satker = Satker::all();
        $tabel_user= TabelUser::all();
        return view('satker-data',
            ['tabel_satker'=>$tabel_satker],
            ['tabel_user'=>$tabel_user]);
    }


    public function insert(){
        $kk = User::all();
        return view('satker-create');
        ['title' => 'Tambah Satker'];
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'id_user' => 'required|max:20',
            'nama_satker'  => 'required|max:100',
            'alamat_satker'  => 'required|max:150',
            'notelp_satker'  => 'required|max:13',
            'pj_satker'  => 'required|max:100',
            'deskripsi kegiatan' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Satker::create($validatedData);

        $request->session()->flash('success', 'Kegiatan berhasil ditambahkan');
        return redirect('/satker-data');
    }

    public function edit(){
        $kegiatan   = Satker::all();
        return view('kegiatan-update',[
            'title' => 'Edit Kegiatan',
            'kegiatan' => $kegiatan
        ]);
    }

    public function update(){

    }

    public function destroy(){

    }

}
