<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Sala;
//use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function Accedi(Request $request){
        if(Auth::check()){
            return redirect()->intended('dashboard');
        } else {
            if ($request->has('username')) {
                $credentials = $request->only('username', 'password');
                //echo Hash::make("password");
                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    if(DB::table('Sala')->count()==0){
                        return redirect()->intended('CreazioneSale');
                    }if(Auth::user()->ruolo === 'admin'){
                        return redirect()->route('HomeAdmin');
                    }elseif(Auth::user()->ruolo === 'segreteria'){
                       return redirect()->route('HomeUser');
                    }


                } else {
                    return view("login",[
                        "errore" => "errore"
                    ]);
                }
            } else {
                return view("login", [
                    "errore" => ""
                ]);
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
