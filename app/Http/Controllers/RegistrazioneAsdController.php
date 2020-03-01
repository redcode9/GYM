<?php

namespace App\Http\Controllers;


use App\Associazione;
use App\User;
use Illuminate\Http\Request;
use Hash;
use DB;
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
            $segr->ruolo = "segreteria";
            $segr->save();

            return redirect()->route("login");


        } else {
            return view("registrazionesegreteria", [
                "errore" => ""
            ]);

        }
    }

    public function index( Request $request){
       /* //return \App\Sala::all(); escono tutti i campi nella tabella Sala
        $sql = 'select * from Associazione';
        if($request->has('id')){
            $sql .= ' where id='.(int)$request->get('id'); //Da qui leggiamo l'ID dell'URL
        }
        //return dd($sql);
        //return DB::select($sql); //questo ci ritorna un array di record e ogni record
        $associazione = DB::select($sql); //qui dentro sono contenute le nostre sale che passiamo nella view
        return view("CreazioneSale",['associazione' => $associazione]); //sto passando i dati nella view della CreazioneSale*/
    }


    public function create(){
        return view('CreazioneSale');
    }

    public function store(Request $req){
        //dd($req); SI OSTINA A NON FUNZIONARE PER VIA DEL METHOD PATCH CHE NON VIENE RILEVATO

    }

    public function save(){
        //DB::table('Sala')->count();
        //dd(request()->all());
        /*$data = request()->only(['giorni_dal','giorni_al','orario_dal','orario_al']);
        $sql = 'INSERT INTO associazione (giorno_ap,giorno_chius,orario_ap,orario_chius)';
        $sql.=' VALUES(:giorni_dal,:giorni_al,:orario_dal,:orario_al)';
        //dd($sql);
        $res = DB::insert($sql,$data); //Questa variabile serve a capire se abbiamo inserito con successo dei record
        dd($res);
        //return redirect()->route('CreazioneSale');*/
    }




}


