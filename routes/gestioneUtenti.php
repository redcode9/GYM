<?php
//creato da Sendray

Route::get('/utenti/GestioneSoci/', function () {   //view GestioneSoci in Gestione Utenti
return view('GestioneSoci');
})->name('GestioneSoci');

Route::get('/utenti/GestioneCollaboratori/', function () {   //view GestioneCollaboratori in Gestione Utenti
    return view('GestioneCollaboratori');
})->name('GestioneCollaboratori');

Route::get('/utenti/GestioneStagisti/', function () {   //view GestioneStagisti in Gestione Utenti
    return view('GestioneStagisti');
})->name('GestioneStagisti');

Route::get('/utenti/GestioneFornitori/', function () {   //view GestioneFornitori in Gestione Utenti
    return view('GestioneFornitori');
})->name('GestioneFornitori');

