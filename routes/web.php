<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', "LoginController@Accedi")->name('login');

Route::get('/iscrizione/', function () {
    return view('scelta');
})->name('iscrizioni');

Route::prefix('iscrizione')->middleware('auth')->group(function () {
    Route::get('scelta', 'IscrizioniController@scelta')->name('scelta');
    Route::any('socio', 'IscrizioneSocioController@registrazione')->name('socio');
    Route::any('socio2/{id}/', 'IscrizioneSocioController@registrazione2')->name('socio2');
    Route::any('socio3/{id}/', 'IscrizioneSocioController@registrazione3')->name('socio3');
    Route::any('tiposocio/{id}/', 'IscrizioneSocioController@tiposocio')->name('tiposocio');
    Route::any('collaboratore', 'IscrizioneCollaboratoreController@registrazione')->name('collaboratore');
    Route::any('collaboratore-2', 'IscrizioniController@collaboratore2')->name('collaboratore2');
    Route::any('collaboratore-3', 'IscrizioniController@collaboratore3')->name('collaboratore3');
    Route::get('stagista', 'IscrizioniController@stagista')->name('stagista');
    Route::get('stagista-2', 'IscrizioniController@stagista2')->name('stagista2');
    Route::get('fornitore', 'IscrizioniController@fornitore')->name('fornitore');
});

Route::prefix('creazione')->middleware('auth')->group(function () {
    Route::get('corso', 'CorsiController@creazionecorso')->name('creazionecorso');
    Route::get('disciplina', 'CorsiController@creazionedisciplina')->name('creazionedisciplina');
});

Route::get('/segretaria/', function () {
    return view('segretaria_contabilità');
})->name('segretaria_contabilità');
Route::get('/corsi/', "CorsiController@carica")->name('corsi');
Route::get('/corso/{id}', "CorsiController@caricaCorso")->name('corso');

Route::get('/admin/', function () {   //view RegistrazioneAdmin
    return view('registrazioneadmin');
})->name('admin');

Route::any('/associazione/', 'RegistrazioneAsdController@registraAsd')->name('asd');

Route::get('/segreteria/', function () {   //view RegistrazioneSegreteria
    return view('registrazionesegreteria');
})->name('segreteria');

Route::get('/utenti/', function () {   //view Gestione Utenti
    return view('GestioneUtenti');
})->name('GestioneUtenti');

Route::get('/utenti/VisualizzaTutti/', function () {   //view VisualizzaTutti in Gestione Utenti
    return view('VisualizzaTutti');
})->name('VisualizzaTutti');

Route::get('/HomeAdmin/', function () {   //view HomeAdmin
    return view('HomeAdmin');
})->name('HomeAdmin');


Route::get('logout', 'LoginController@logout')->name('logout');
