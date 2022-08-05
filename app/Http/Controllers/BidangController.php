<?php

namespace App\Http\Controllers;
use App\Models\Bidang;
use App\Models\Satker;
use App\Models\TabelUser;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        $tabel_bidang = Bidang::all();
        $tabel_kegiatan_satker = Satker::all();
        return view('bidang-data',
            ['tabel_bidang'=>$tabel_bidang],
            ['tabel_kegiatan_anggaran'=>$tabel_kegiatan_satker]);
            ['title' => 'Data Bidang'];
    }

    public function insert(){
        $satker = Satker::all();
        return view('bidang-create',[
            'title' => 'Tambah Bidang',
            'satker' => $satker
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_satker'     => 'required',
            'nama_bidang'   => 'required',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        Bidang::create($validatedData);
        $request->session()->flash('success','Bidang berhasil ditambahkan!');
        return redirect('/bidang-data');
    }

    public function edit(){
        $user   = TabelUser::all();
        $satker = Satker::all();
        return view('bidang-update',[
            'title' => 'Edit Bidang',
            'user' => $user,
            'satker' => $satker
        ]);
    }

    public function update(Request $request, $id){
        Bidang::where('id', $id)->update([
            'nama_bidang'   => $request->nama_bidang,
            'jenis_bidang'  => $request->jenis_bidang,
            'updated_at'    => date("Y-m-d H:i:s"),
        ]);

        $request->session()->flash('success','Bidang berhasil diupdate!');

        return redirect('/bidang-data');
    }

    public function destroy($id){
        Bidang::destroy($id);
        return redirect('/bidang-data')->with('successDelete', 'Bidang berhasil dihapus!');
    }

}


