<?php

namespace App\Http\Controllers;

use App\Associazione;
use App\DatiFiscali;
use App\Iscritto;
use App\Sala;
use App\Socio;
use App\Tessera;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IscrizioneSocioController extends Controller
{

    public function registrazione(Request $request){

        if ($request->has("nome")) {
            $iscritto = new Iscritto;
            $socio = new Socio;
            $socio->nome = $request->input("nome");
            $socio->cognome = $request->input("cognome");
            $socio->genere = $request->input("sesso");
            $socio->luogo_nasc = $request->input("nascita");
            $socio->data_nasc = $request->input("data");

            $iscritto->indirizzo = $request->input("indirizzo");
            $iscritto->cap = $request->input("cap");
            $iscritto->citta = $request->input("citta");
            $iscritto->provincia = $request->input("prov");
            $iscritto->cf = $request->input("cf");
            $iscritto->cellulare = $request->input("tel");
            $iscritto->email = $request->input("email");

            $iscritto->gestore = Auth::id();
            $iscritto->save();

            $socio->iscrizione = $iscritto->id;
            $socio->save();

            return redirect()->route("socio2", ["id" => $socio->id]);


        } else {
            return view("iscrizionesocio", [
                "errore" => ""
            ]);

        }
    /*} else {
            echo "ciao ".Auth::id()." ciao";
        }*/
    }


    public function registrazione2($id, Request $request){

        if($request->has("data1")){
            $socio = Socio::find($id);
            $iscritto  = Iscritto::find($socio->iscrizione);
            //data1 numero scadenza
            $iscritto->ass_rilascio = $request->get("data1");
            $iscritto->ass_scad = $request->get("scadenza1");
            $iscritto->ass_num = $request->get("numero");
            //data2 scadenza2
            $iscritto->cert_med_scadenza =  $request->get("scadenza2");
            $iscritto->cert_med_rilascio =  $request->get("data2");

            $iscritto->save();

            return redirect()->route('socio3', ["id" => $id]);

        } else {
            return view("iscrizionesocio2", [
                "errore" => "",
                "socio" => $id
            ]);
        }
    }

    public function registrazione3($id, Request $request){

        if($request->has("numero")){
            $socio = Socio::find($id);
            $tessera = new Tessera;
            $tessera->data_tess =  $request->get("emissione");
            $tessera->scad_tess =  $request->get("scadenza");
            $tessera->save();
            $socio->tessera  = $tessera->id;
            $socio->save();

            //dati fiscali
            //return redirect()->route();
            //echo $request->get("importo");
            $datidiscali = new DatiFiscali;
            $datidiscali->pagamento = $request->get("pagamento");
            $datidiscali->descrizione = $request->get("descrizione");
                //$datidiscali->importo = $request->get("importo");
                $datidiscali->tipo_doc = $request->get("tipoDocumento");
                $datidiscali->data_iscriz = date("Y-m-d");
            $datidiscali->socio = $socio->id;
            $datidiscali->save();
            return redirect()->route('tiposocio', ["id" => $id]);


        } else {
            $dati = DatiFiscali::where("tipo_doc","F")->count();
            $ass = Associazione::all()->first();
            //$imp = $ass->importo;
            //for test
            $imp = 20;
            $fattura = DatiFiscali::where("tipo_doc","F")->count()+1;
            $ricevutaN = DatiFiscali::where("tipo_doc","RN")->count()+1;
            $ricevuta = DatiFiscali::where("tipo_doc","R")->count()+1;
            $ricevutaF= DatiFiscali::where("tipo_doc","RF")->count()+1;

            return view("iscrizionesocio3", [
                "errore" => "",
                "socio" => $id,
                "F"=> $fattura,
                "RN"=> $ricevutaN,
                "R"=> $ricevuta,
                "RF"=> $ricevutaF,
                "importo" => $imp
            ]);
        }
    }

    public function registrazione4(){
        $sale = Sala::all();
        return view("iscrizionesocio4",[
            "errore" => "",
            "sale" => $sale
            ]);
    }

    public function tiposocio($id, Request $request){

        if($request->isMethod("POST")){
            $socio = Socio::find($id);
            $socio->tipo=$request->get("scelta");
            $socio->verbalizzato=0;
            $socio->save();
            $scelta = $request->get("direzione");
            switch ($scelta){
                case "termina":
                    return redirect()->route("utenti",["id"=>$id]);
                    break;
                case "corsi":
                    return redirect()->route("corsi",["id"=>$id]);
            }


        } else {

            return view("tiposocio", [
                "errore" => "",
                "socio" => $id
            ]);
        }
    }

}


