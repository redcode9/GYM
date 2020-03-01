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
        if($request->has('id')){
            $sql .= ' where id='.(int)$request->get('id'); //Da qui leggiamo l'ID dell'URL
        }
        //return dd($sql);
        //return DB::select($sql); //questo ci ritorna un array di record e ogni record
        $sala = DB::select($sql); //qui dentro sono contenute le nostre sale che passiamo nella view
        return view("CreazioneSale",['sala' => $sala]); //sto passando i dati nella view della CreazioneSale
    }

    public function delete($id){

        $sql = 'DELETE FROM sala where id= :id';
        DB::delete($sql,['id' => $id]); //Questa ritorna la quantità di record eliminati
        //dd($id);
        //Adesso se stiamo facendo una chiamata Ajax non serve più il redirect
        return redirect()->back(); //serve a tornare indietro alla route precedente di quando viene chiamato il metodo
    }

    public function edit($id){
        $sql = 'select sala,id from sala where id=:id';
        $sala =DB::select($sql,['id' => $id]);
        //da fare eventualmente il return se serve

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
