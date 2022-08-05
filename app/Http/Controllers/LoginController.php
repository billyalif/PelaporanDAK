<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login', [
            "title" => "Login"
        ]);
    }

    // public function authenticate(Request $request)
    // {
      
    //     $credentials = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     if(Auth::guard('admin')->attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended(route('dashboard'));
    //     }else if(Auth::guard('user')->attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended(route('MainUser'));
    //     }
    //     else if(Auth::guard('guru')->attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended(route('DashGuru'));
    //     }
    //     return back()->with(['loginError' => 'Email atau Password salah']);
    // }

    // public function logout(Request $request){
    //     if(Auth::guard('admin')->check()){
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/');
    //     }else if(Auth::guard('user')->check()){
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/');
    //     }
    //     else if(Auth::guard('guru')->check()){
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/');
    //     }
    // }
}
