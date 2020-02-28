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

Route::get('/iscrizione/utenti', function () {
    return view('scelta');
})->name('iscrizioni');

Route::prefix('iscrizione')->middleware('auth')->group(function () {
//    Route::get('nuovo-utente', 'IscrizioniController@scelta')->name('scelta');
    Route::any('socio', 'IscrizioneSocioController@registrazione')->name('socio');
    Route::any('socio-2/{id}/', 'IscrizioneSocioController@registrazione2')->name('socio2');
    Route::any('socio-3/{id}/', 'IscrizioneSocioController@registrazione3')->name('socio3');
    Route::any('socio-4/{id}', 'IscrizioneSocioController@registrazione4')->name('socio4');
//    Route::any('tiposocio/{id}/', 'IscrizioneSocioController@tiposocio')->name('tiposocio');
    Route::any('collaboratore', 'IscrizioneCollaboratoreController@registrazione')->name('collaboratore');
    Route::any('collaboratore-2/{id}/', 'IscrizioniController@collaboratore2')->name('collaboratore2');
    Route::any('collaboratore-3/{id}/', 'IscrizioniController@collaboratore3')->name('collaboratore3');
    Route::any('collaboratore-4/{id}', 'IscrizioneCollaboratoreController@registrazione4')->name('collaboratore4');
    Route::get('stagista', 'IscrizioniController@stagista')->name('stagista');
    Route::post('stagista', 'IscrizioneStagController@registrazione')->name('stagistaPost');
    Route::get('stagista-2/{id}/', 'IscrizioniController@stagista2')->name('stagista2');
    Route::post('stagista-2/{id}/', 'IscrizioneStagController@registrazioneCont')->name('stagista2Post');
    Route::get('fornitore', 'IscrizioniController@fornitore')->name('fornitore');
    Route::post('fornitore', 'IscrizioneFornController@registrazione')->name('fornitorePost');
    Route::get('pdfiscrizione/{tipoPdf}', 'ModulisticaController@stampaPdf')->name('stampapdf');

    Route::get('corsi', 'IscrizioneCorsiController@carica')->name('corsi');
    Route::get('nuovo-corso/{id}', 'IscrizioneCorsiController@creazionecorso')->name('creazionecorso');
    Route::get('nuova-disciplina', 'IscrizioneCorsiController@creazionedisciplina')->name('creazionedisciplina');
    Route::post('nuovo-corso/{id}', 'IscrizioneCorsiController@creazionecorsoPost')->name('creazionecorsoPost');
    Route::post('nuova-disciplina', 'IscrizioneCorsiController@creazionedisciplinaPost')->name('creazionedisciplinaPost');

    Route::get('allievo-a-corso', 'IscrizioneUtenteCorsiController@caricaAllievo')->name('allievoacorso');
    Route::get('insegnante-a-corso', 'IscrizioneUtenteCorsiController@caricaInsegnante')->name('insegnanteacorso');
});

Route::prefix('gestione')->middleware('auth')->group(function () {
    Route::get('utenti', 'GestioniController@gestioneutenti')->name('GestioneUtenti');
    Route::get('corsi', 'GestioneCorsiController@carica')->name('gestionecorsi');
    Route::get('corso/{id}', 'GestioneCorsiController@caricaCorso')->name('corso');
});



Route::get('modifica_asd', 'ModificaAsdController@mostraAsd')->middleware('auth')->name('mostraasd');
Route::post('modifica_asd', 'ModificaAsdController@modificaAsd')->middleware('auth')->name('modificaasd');




Route::get('/contabilità/', 'ContabilitaController@tabelledati')->middleware(['web','auth'])->name('segretaria_contabilità');

//Route::get('/corsi/', "IscrizioneCorsiController@carica")->name('corsi');
//Route::get('/corso/{id}', "IscrizioneCorsiController@caricaCorso")->name('corso');

Route::any('/admin/', 'RegistrazioneAsdController@registraAdmin')->name('admin');

Route::any('/associazione/', 'RegistrazioneAsdController@registraAsd')->name('asd');
Route::any('/segreteria/', 'RegistrazioneAsdController@registraSegreteria')->name('segreteria');

//Route::get('/utenti/', function () {   //view Gestione Utenti
//    return view('GestioneUtenti');
//})->name('GestioneUtenti');

Route::get('/utenti/VisualizzaTutti/', function () {   //view VisualizzaTutti in Gestione Utenti
    return view('VisualizzaTutti');
})->name('VisualizzaTutti');

Route::get('/HomeAdmin/', function () {   //view HomeAdmin
    return view('templates.Dashboard');
})->name('HomeAdmin');


Route::get('logout', 'LoginController@logout')->name('logout');
