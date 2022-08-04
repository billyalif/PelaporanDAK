<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControlller extends Controller
{
    public function index(){
        return view('Dashboard.super-admin',[
            "title" => "Dashboard"
        ]);
    }

    public function home(){
        return view('Dashboard.admin',[
            "title" => "Dashboard"
        ]);
    }
}
