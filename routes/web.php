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

    Route::get('moduloIscr/', 'IscrizioneSocioController@stampaModuloIscr')->name('moduloIscr');

//    Route::any('tiposocio/{id}/', 'IscrizioneSocioController@tiposocio')->name('tiposocio');
    Route::any('collaboratore', 'IscrizioneCollaboratoreController@registrazione')->name('collaboratore');
    Route::any('collaboratore-2/{id}/', 'IscrizioneCollaboratoreController@collaboratore2')->name('collaboratore2');
    Route::any('collaboratore-3/{id}/', 'IscrizioneCollaboratoreController@collaboratore3')->name('collaboratore3');
    Route::any('collaboratore-4/{id}', 'IscrizioneCollaboratoreController@collaboratore4')->name('collaboratore4');

    Route::get('stagista', 'IscrizioniController@stagista')->name('stagista');
    Route::post('stagista', 'IscrizioneStagController@registrazione')->name('stagistaPost');
    Route::get('stagista-2/{id}/', 'IscrizioniController@stagista2')->name('stagista2');
    Route::post('stagista-2/{id}', 'IscrizioneStagController@registrazioneCont')->name('stagista2Post');

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

    //--Routes per la gestione utenti--//
    Route::any('/editSocio/{id}','GestioniController@editSocio')->name('editSocio');
    Route::any('richiediFondatore/{id}', 'GestioniController@richiediFondatore')->name('richiediFondatore');
    Route::any('/deleteSocio/{id}','GestioniController@deleteSocio')->name('deleteSocio');

    Route::any('/editFornitore/{id}','GestioniController@editFornitore')->name('editFornitore');
    Route::any('/deleteFornitore/{id}/','GestioniController@deleteFornitore')->name('deleteFornitore');

    Route::any('/editStagista/{id}','GestioniController@editStagista')->name('editStagista');
    Route::any('/deleteStagista/{id}/','GestioniController@deleteStagista')->name('deleteStagista');

    Route::any('/editCollab/{id}','GestioniController@editCollab')->name('editCollab');
    Route::any('/deleteCollab/{id}/','GestioniController@deleteCollab')->name('deleteCollab');

    Route::any('/editTutti/{id}','GestioniController@editTutti')->name('editTutti');
    Route::any('/deleteTutti/{id}/','GestioniController@deleteTutti')->name('deleteTutti');

    //---------------------------------//


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

/*Route::get('/utenti/VisualizzaTutti/', function () {   //view VisualizzaTutti in Gestione Utenti
    return view('VisualizzaTutti');
})->name('VisualizzaTutti');
*/

Route::get('/utenti/VisualizzaTutti/', 'JoinTuttiController@tabellaTuttiUtenti')->name('VisualizzaTutti');


Route::get('/dashboard/', 'DashAdminController@dashaazioni')->name('HomeAdmin');//view HomeAdmin
Route::get('/dashboard/verbalizzoNO/{id}','DashAdminController@verbalizzoNO')->name('HomeAdminVRBN');//Verbalizzazione socio Negativa
Route::get('/dashboard/verbalizzoSI/{id}','DashAdminController@verbalizzoSI')->name('HomeAdminVRBS');//Verbalizzazione socio Positiva
Route::get('/dashboard/fondatoreNO/{id}','DashAdminController@fondatoreNO')->name('HomeAdminFNDN');//Verbalizzazione fondatore Negativa
Route::get('/dashboard/fondatoreSI/{id}','DashAdminController@fondatoreSI')->name('HomeAdminFNDS');//Verbalizzazione fondatore Positiva
Route::get('/dashboard/aggiornatsr/{id}','DashAdminController@aggtess')->name('HomeAdminAGTS');//aggiornamento tessera socio
Route::get('/dashboard/aggmedcertf/{id}','DashAdminController@aggmedcertf')->name('HomeAdminAGCM');//aggiornamento certificato medico socio
Route::get('/dashboard/aggmedcertf/{id}','DashAdminController@aggmedcertf')->name('HomeAdminAGCM');//aggiornamento tessera socio
/*Route::get('/CreazioneSale/',function (){
    return \App\Sala::all();
}); //ci mostra per ora tutte le sale*/

Route::get('/CreazioneSale','SalaController@index')->name('CreazioneSale');
Route::get('/CreazioneSale/{id}/delete','SalaController@delete');
Route::get('/CreazioneSale/{id}/edit','SalaController@edit');
Route::get('/CreazioneSale/create','SalaController@create')->name('sala.create');
Route::post('/CreazioneSale','SalaController@save')->name('sala.save');
//Route::post('CreazioneAssociazione/create','RegistrazioneAsdController@create')->name('ASDPT2.create');
//Route::post('/CreazioneSale/{id}','RegistrazioneAsdController@save')->name('ASDPT2.save');
//Route::get('/CreazioneSale/{id}','RegistrazioneAsdController@store');

/*Route::get('/CreazioneSale/', function () {   //view HomeAdmin
    return view('CreazioneSale');
})->name('CreazioneSale');*/


Route::get('logout', 'LoginController@logout')->name('logout');
