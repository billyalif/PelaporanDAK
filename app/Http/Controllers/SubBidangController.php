<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Subbidang;
use Illuminate\Http\Request;

class SubBidangController extends Controller
{
    public function index(){
        $tabel_subbidang = Subbidang::all();
        $tabel_bidang = Bidang::all();
        return view('subbid-data',
            ['tabel_subbidang'=>$tabel_subbidang],
            ['tabel_bidang'=>$tabel_bidang]);
    }

    public function insert(){
        $bidang = Bidang::all();
        return view('bidang-create',[
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
        return redirect('/subbidang-data');
    }

    public function edit(){
        $tabel_subbidang = Subbidang::all();
        $tabel_bidang = Bidang::all();
        return view('subbid-update',[
            'title' => 'Edit Bidang',
            'subbidang' => $tabel_subbidang,
            'bidang' => $tabel_bidang
        ]);
    }

    public function update(Request $request, $id){
        Subbidang::where('id', $id)->update([
            'nama_subbidang'   => $request->nama_bidang,
            'updated_at'    => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success','Sub Bidang berhasil diupdate!');

        return redirect('/subbidang-data');
    }

    public function destroy($id){
        Bidang::destroy($id);
        return redirect('/subbidang-data')->with('successDelete', 'Bidang berhasil dihapus!');
    }

}
