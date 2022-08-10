<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Subbidang;
use Illuminate\Http\Request;

class SubBidangController extends Controller
{
    public function index($id){
        $bidang = Bidang::find($id);
        $tabel_subbidang = Subbidang::where('id_bidang', $id)->get();
        return view('subbid-data',
            ['tabel_subbidang'=>$tabel_subbidang,
            'idbidang'=> $id,
            'title' => 'Data Sub-Bidang',
            'no'    => 1,
            'bidang'=> $bidang
        ]);
    }

    public function insert($id){
        $bidang = Bidang::find($id);
        return view('subbid-create',[
            'title' => 'Tambah Bidang',
            'bidang' => $bidang
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_bidang'     => 'required',
            'nama_subbidang'   => 'required',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        Subbidang::create($validatedData);

        $request->session()->flash('success','SubBidang berhasil ditambahkan!');
        return redirect('/subbid-'.$validatedData['id_bidang']);
    }

    public function edit($id){
        $subbidang = Subbidang::find($id);
        return view('subbid-update',[
            'title' => 'Edit Bidang',
            'subbid' => $subbidang,
            'idsubbid' => $id
        ]);
    }

    public function update(Request $request, $id){
        Subbidang::where('id', $id)->update([
            'nama_subbidang'   => $request->nama_subbidang,
            'updated_at'    => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success','Sub Bidang berhasil diupdate!');
        $subbid = Subbidang::where('id',$id)->pluck('id_bidang');
        return redirect('/subbid-'.$subbid[0]);
    }

    public function destroy($id){
        $subbid = Subbidang::where('id',$id)->pluck('id_bidang');
        Subbidang::destroy($id);
        return redirect('/subbid-'.$subbid[0])->with('successDelete', 'Bidang berhasil dihapus!');
    }

}
