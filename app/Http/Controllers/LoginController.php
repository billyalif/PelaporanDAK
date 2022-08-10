<?php

namespace App\Http\Controllers;
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

    public function authenticate(Request $request)
    {

        $credentials = [
            'username_user' => $request->username,
            'password' => $request->password,
        ];

        // dd($credentials);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/home');
        };


        // if(Auth::guard('admin')->attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('dashboard'));
        // }else if(Auth::guard('user')->attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('MainUser'));
        // }
        // else if(Auth::guard('guru')->attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('DashGuru'));
        // }
        return back()->with(['loginError' => 'Email atau Password salah']);
    }

    public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
    }
}
