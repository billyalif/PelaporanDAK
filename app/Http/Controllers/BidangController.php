<?php

namespace App\Http\Controllers;
use App\Models\Bidang;
use App\Models\Satker;
use App\Models\TabelUser;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index($id){
        $satker = Satker::find($id);
        $tabel_bidang = Bidang::where('id_satker',$id)->get();
        return view('bidang-data',[
            'tabel_bidang' => $tabel_bidang,
            'title' => 'Data Bidang',
            'no'    => 1,
            'satker'=> $satker,
            'idsatker' => $id
        ]);
    }

    public function insert($id){
        $satker = Satker::find($id);
        return view('bidang-create',[
            'title' => 'Tambah Bidang',
            'satker' => $satker,
            'id'     => $id
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_satker'     => 'required',
            'nama_bidang'   => 'required',
            'pj_bidang'     => 'required',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        Bidang::create($validatedData);
        $request->session()->flash('success','Bidang berhasil ditambahkan!');
        return redirect('/bidang-'.$validatedData['id_satker']);
    }

    public function edit($id){
        $bidang = Bidang::find($id);
        return view('bidang-update',[
            'title' => 'Edit Bidang',
            'idbidang'   => $id,
            'bidang'    => $bidang
        ]);
    }

    public function update(Request $request, $id){
        Bidang::where('id', $id)->update([
            'nama_bidang'   => $request->nama_bidang,
            'pj_bidang'  => $request->pj_bidang,
            'updated_at'    => date("Y-m-d H:i:s"),
        ]);
        $bidang = Bidang::where('id',$id)->pluck('id_satker');

        $request->session()->flash('success','Bidang berhasil diupdate!');
        return redirect('/bidang-'.$bidang[0]);
    }

    public function destroy($id){
        $bidang = Bidang::where('id',$id)->pluck('id_satker');
        Bidang::destroy($id);
        return redirect('/bidang-'.$bidang[0])->with('successDelete', 'Bidang berhasil dihapus!');
    }

}


