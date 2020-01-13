<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IscrizioniController extends Controller
{
    public function collaboratore()
    {
        return view('iscrizionecollaboratore');
    }

    public function collaboratore2()
    {
        return view('iscrizionecollaboratore2');
    }

    public function collaboratore3()
    {
        return view('iscrizionecollaboratore3');
    }

    public function stagista()
    {
        return view('iscrizionestagista');
    }

    public function stagista2()
    {
        return view('iscrizionestagista2');
    }

}
