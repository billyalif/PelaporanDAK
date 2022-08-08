<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use App\Models\Batch;
use App\Models\Dak;
use App\Models\Kegiatan;
use App\Models\TabelUser;

class AnggaranController extends Controller
{
    public function index(){

    }

    public function insert(){
        $user = TabelUser::all();
        $kegiatan = Kegiatan::all();
        $dak = Dak::all();
        $batch = Batch::all();

        return view('anggaran-kegiatan',[
            'title' => 'Tambah Anggaran Kegiatan',
            'user' => $user,
            'kegiatan' => $kegiatan,
            'dak'  => $dak,
            'batch' => $batch,
        ]);
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
