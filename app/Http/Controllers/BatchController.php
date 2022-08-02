<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index(){
        $tabel_batch = Batch::all();
        return view('batch-data',
            ['tabel_bidang'=>$tabel_batch]);
    }

    public function insert(){
        return view('batch-create',[
            'title' => 'Tambah Batch'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'triwulan_batch' => 'required|max:15',
            'tahun_batch' => 'required|max:4',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Batch::create($validatedData);

        $request->session()->flash('success', 'Batch Baru Berhasil ditambahkan!');

        return redirect('/batch-data');
    }

    public function destroy($id){
        Batch::destroy($id);

        return redirect('/batch-data')->with('successDelete', 'Batch Berhasil dihapus!');
    }
}




