<?php

namespace App\Http\Controllers;


use App\Associazione;
use App\DatiFiscali;
use App\Esterno;
use App\Iscritto;
use App\Sala;
use App\Tessera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IscrizioneCollaboratoreController extends Controller
{

    public function registrazione(Request $request){
        if ($request->has("nome")) {
            $iscritto = new Iscritto;
            $collab = new Esterno;
            $collab->nome = $request->input("nome");
            $collab->cognome = $request->input("cognome");
            $collab->genere = $request->input("sesso");
            $collab->luogo_nasc = $request->input("nascita");
            $collab->data_nasc = $request->input("data");

            $iscritto->indirizzo = $request->input("indirizzo");
            $iscritto->cap = $request->input("cap");
            $iscritto->citta = $request->input("citta");
            $iscritto->provincia = $request->input("prov");
            $iscritto->cf = $request->input("cf");
            $iscritto->cellulare = $request->input("tel");
            $iscritto->email = $request->input("email");

            $iscritto->gestore = Auth::id();
            $iscritto->save();

            $collab->iscrizione = $iscritto->id;
            $collab->save();


            return redirect()->route("collaboratore2", ["id" => $collab->id]);


        } else {
            return view("iscrizionecollaboratore", [
                "errore" => ""
            ]);

        }
    }
    public function collaboratore2($id, Request $request){

        if($request->has("data1")){
            $collab = Esterno::find($id);
            $iscritto  = Iscritto::find($collab->iscrizione);
            //data1 numero scadenza
            $iscritto->ass_rilascio = $request->get("data1");
            $iscritto->ass_scad = $request->get("scadenza1");
            $iscritto->ass_num = $request->get("numero");
            //data2 scadenza2
            $iscritto->cert_med_scadenza =  $request->get("scadenza2");
            $iscritto->cert_med_rilascio =  $request->get("data2");

            $iscritto->save();

            return redirect()->route("collaboratore3", ["id" =>$collab->id]);

        } else {
            return view("iscrizionecollaboratore2", [
                "errore" => "",
                "socio" => $id
            ]
            );

        }
    }

    public function collaboratore3($id, Request $request){

        if($request->has("numero")){
            $collab = Esterno::find($id);
            $tessera = new Tessera;
            $tessera->data_tess =  $request->get("emissione");
            $tessera->scad_tess =  $request->get("scadenza");
            $tessera->save();
            $collab->tessera  = $tessera->id;
            $collab->save();

            //dati fiscali
            //return redirect()->route();
            //echo $request->get("importo");
            $datidiscali = new DatiFiscali;
            $datidiscali->pagamento = $request->get("pagamento");
            $datidiscali->descrizione = $request->get("descrizione");
            //$datidiscali->importo = $request->get("importo");
            $datidiscali->tipo_doc = $request->get("tipoDocumento");
            $datidiscali->data_iscriz = date("Y-m-d");
            $datidiscali->collab = $collab->id;
            $datidiscali->save();
            return redirect()->route('iscrizioni');


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

            return view("iscrizionecollaboratore3", [
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
        return view("iscrizionecollaboratore4",[
            "errore" => "",
            "sale" => $sale
        ]);
    }
}
