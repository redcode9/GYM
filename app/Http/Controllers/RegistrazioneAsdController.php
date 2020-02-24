<?php

namespace App\Http\Controllers;


use App\Associazione;
use App\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Hash;

class RegistrazioneAsdController extends Controller
{

    public function registraAsd(Request $request)
    {

        if ($request->isMethod("POST")) {
            $asd = new Associazione;
            $asd->nome = $request->input("nome");
            $asd->iban = $request->input("iban");
            $asd->indirizzo = $request->input("indirizzo");
            $asd->cap = $request->input("cap");
            $asd->citta = $request->input("citta");
            $asd->provincia = $request->input("prov");
            $asd->telefono = $request->input("tel");
            $asd->p_iva = $request->input("piva");
            $asd->save();

            return redirect()->route("admin");

        } else {
            return view("registrazioneasd", [
                "errore" => ""
            ]);

        }
    }


    public function registraAdmin(Request $request)
    {

        if ($request->isMethod('POST')) {
            $admin = new User;
            $admin->username = $request->input("username");
            $admin->password = Hash::make(request('password'));
            $admin->ruolo = "Admin";
            $admin->save();


            if ($request->has('submit1')) {
                return redirect()->route("login");
            } else {
                return redirect()->route("segreteria");
            }

        } else {
            return view("registrazioneadmin", [
                "errore" => ""
            ]);

        }
    }

    public function registraSegreteria(Request $request)
    {

        if ($request->isMethod('POST')) {
            $segr = new User;
            $segr->username = $request->input("username");
            $segr->password = Hash::make(request('password'));
            $segr->ruolo = "Segreteria";
            $segr->save();

            return redirect()->route("login");


        } else {
            return view("registrazionesegreteria", [
                "errore" => ""
            ]);

        }
    }




}


