<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function iscrizione_collaboratore()
    {
        return view('iscrizionecollaboratore');
    }

    public function iscrizione_collaboratore2()
    {
        return view('iscrizionecollaboratore2');
    }

    public function iscrizione_collaboratore3()
    {
        return view('iscrizionecollaboratore3');
    }
}
