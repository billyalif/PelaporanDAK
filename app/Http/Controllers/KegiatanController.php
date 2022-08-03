<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Anggaran;
use App\Models\Subbidang;
use App\Models\Dak;
use App\Models\Batch;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        $tabel_kegiatan = Kegiatan::all();
        $tabel_kegiatan_anggaran = Anggaran::all();
        return view('kegiatan-data',
            ['tabel_kegiatan'=>$tabel_kegiatan],
            ['tabel_kegiatan_anggaran'=>$tabel_kegiatan_anggaran]);
    }


    public function insert(){
        return view('kegiatan-create');
        ['title' => 'Tambah Kegiatan'];
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_kegiatan'  => 'required|max:100',
            'deskripsi_kegiatan' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Kegiatan::create($validatedData);

        $request->session()->flash('success', 'Kegiatan berhasil ditambahkan');
        return redirect('/kegiatan-data');
    }

    public function edit(){
        $kegiatan   = Kegiatan::all();
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
