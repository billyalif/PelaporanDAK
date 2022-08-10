<?php

namespace App\Http\Controllers;

use App\Models\Satker;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $tabel_user= User::where('id_role','2')->get();
        return view('kk',
            [
            'tabel_user'=>$tabel_user,
            'title' => 'Data Kabupaten/Kota']);
    }
}
