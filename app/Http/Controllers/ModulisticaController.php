<?php

namespace App\Http\Controllers;

use http\Env\Response;

class ModulisticaController extends Controller {

    public function stampaPdf($tipoPdf){

        switch ($tipoPdf){
            case "RN":
                $path='..\resources\modulistica\fac-simile-ricevuta-numerata.pdf';
                return response()->download($path);
                break;

            case "R":
                $path='..\resources\modulistica\Ricevuta.pdf';
                return response()->download($path);
                break;

            case "RF":
                $path='..\resources\modulistica\fac-simile-ricevuta-fiscale.pdf';
                return response()->download($path);
                break;

            case "F":
                $path='..\resources\modulistica\fac-simile-fattura-associazione.pdf';
                return response()->download($path);
                break;
        }

    }
}