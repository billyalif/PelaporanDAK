<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Subbidang;
use App\Models\Dak;
use App\Models\Batch;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index($id){
        $subbidang = Subbidang::find($id);
        $tabel_kegiatan = Kegiatan::where('id_subbidang', $id)->get();
        return view('kegiatan-data',
            ['tabel_kegiatan'=>$tabel_kegiatan,
            'subbid'=> $subbidang,
            'title' => 'Data Kegiatan',
            'no'    => 1
        ]);
    }


    public function insert($id){
        $batch = Batch::all();
        $dak   = Dak::all();
        $subbidang = Subbidang::find($id);
        return view('kegiatan-create',[
            'title' => 'Tambah Kegiatan',
            'subbidang'=>$subbidang,
            'batch'=>$batch,
            'dak'=>$dak
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_subbidang' => 'required',
            'nama_kegiatan'  => 'required|max:100',
            'deskripsi_kegiatan' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
            'jumlah_penerima_manfaat' => 'required',
            'pagu_diterima' => 'required',
            'pagu_dibelanjakan' => 'required',
            'metode_pembayaran' => '',
            'keterangan' => '',
            'id_dak' => 'required',
            'id_batch' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Kegiatan::create($validatedData);

        $request->session()->flash('success', 'Kegiatan berhasil ditambahkan');
        return redirect()->back();
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
