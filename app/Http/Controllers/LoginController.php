<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function Accedi(Request $request){
        if(Auth::check()){
            return redirect()->intended('iscrizioni');
        } else {
            if ($request->has('username')) {
                $credentials = $request->only('username', 'password');
                //echo Hash::make("password");
                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    return redirect()->intended('iscrizioni');
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
}
