<?php


namespace App\Http\Controllers;

use App\Socio;
use App\Esterno;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ContabilitaController extends Controller

{

    public function tabelledati ()
    {
        // socio db
        $nomecognomeS = DB::table('socio')
            ->join('transazione', 'socio.id','=','transazione.socio')
            ->join('corso', 'corso.id', '=', 'transazione.corso' )
            ->select('socio.nome','socio.cognome','corso.nome as corsonome','transazione.tipo as tipoS','transazione.importo')
            ->get();


        //esterno db
        $esternoid = DB::table('transazioneest')->where('esterno')->get();
        $importoE = DB::table('transazioneest')->where('importo')->get();
        $nomecognomeE = DB::table('esterno')
            ->join('transazioneest','esterno.id','=','transazioneest.esterno')
            ->select('esterno.nome','esterno.cognome','transazioneest.importo')
            ->get();


        return view('segretaria_contabilità',
            ['esterno'=>$esternoid,'importoE'=>$importoE,'esternoncm'=>$nomecognomeE,'socioncm'=>$nomecognomeS]);

    }

}


