<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;
use DB;

class SalaController extends Controller
{
    public function index( Request $request){
        //return \App\Sala::all(); escono tutti i campi nella tabella Sala
        $sql = 'select * from Sala';
        $sql2 = 'select * from Associazione'; //qui facciamo la selezione di tutte le associazioni
        if($request->has('id')){
            $sql .= ' where id='.(int)$request->get('id'); //Da qui leggiamo l'ID dell'URL
        }
        //return dd($sql);
        //return DB::select($sql); //questo ci ritorna un array di record e ogni record
        $associazione = DB::select($sql2);
        $sala = DB::select($sql); //qui dentro sono contenute le nostre sale che passiamo nella view
        //dd($associazione);
        return view("CreazioneSale",['sala' => $sala, 'associazione' => $associazione[0]]); //sto passando i dati nella view della CreazioneSale
    }

    public function delete($id){

        $sql = 'DELETE FROM sala where id= :id';
        DB::delete($sql,['id' => $id]); //Questa ritorna la quantità di record eliminati
        //dd($id);
        //Adesso se stiamo facendo una chiamata Ajax non serve più il redirect
        return redirect()->back(); //serve a tornare indietro alla route precedente di quando viene chiamato il metodo
    }

    public function edit($id){
        $sql = 'select nome,id from sala where id=:id';
        $sala =DB::select($sql,['id' => $id]);
        //da fare eventualmente il return se serve
        $sql2 = 'select id, giorno_ap,giorno_chius,orario_ap,orario_chius,sconto_dal,sconto from Associazione';
        $associazione = DB::select($sql2);
        return view('CreazioneSale',['sala' => $sala, 'associazione' => $associazione[0]]);

    }

    public function store(Request $req, $id){
        //dd($req);
        $data = request()->only(['giorni_dal','giorni_al','orario_dal','orario_al','sconto_dal','sconto']); //questi sono i dati della view, non del DB
        $data['id'] = $id;
        //dd($data);
        $sql = 'UPDATE Associazione SET giorno_ap =:giorni_dal, giorno_chius =:giorni_al, orario_ap =:orario_dal, orario_chius=:orario_al ,sconto_dal =:sconto_dal, sconto =:sconto WHERE id =:id';
        DB::update($sql,$data);
        //dd($res);
        return redirect()->route('HomeAdmin');
    }

    public function create(){
        return view('CreazioneSalePT2');
    }

    public function save(){
        //DB::table('Sala')->count();
        //dd(request()->all());
        $data = request()->only(['nome']);
        $data['id'] = (DB::table('Sala')->count())+1;
        $sql = 'INSERT INTO sala (nome,id)';
        $sql.=' VALUES(:nome,:id)';
        //dd($sql);
        DB::insert($sql,$data); //Questa variabile serve a capire se abbiamo inserito con successo dei record
        //dd($res);
        return redirect()->route('CreazioneSale');
    }
}
