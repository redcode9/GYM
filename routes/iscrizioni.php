<?php
Route::get('scelta', 'IscrizioniController@scelta')->name('scelta');
Route::get('socio', 'IscrizioniController@socio')->name('socio');
Route::get('socio-2', 'IscrizioniController@socio2')->name('socio2');
Route::get('socio-3', 'IscrizioniController@socio3')->name('socio3');
Route::get('collaboratore', 'IscrizioniController@collaboratore')->name('collaboratore');
Route::get('collaboratore-2', 'IscrizioniController@collaboratore2')->name('collaboratore2');
Route::get('collaboratore-3', 'IscrizioniController@collaboratore3')->name('collaboratore3');
Route::get('stagista', 'IscrizioniController@stagista')->name('stagista');
Route::get('stagista-2', 'IscrizioniController@stagista2')->name('stagista2');
Route::get('fornitore', 'IscrizioniController@fornitore')->name('fornitore');
Route::get('segreteria', 'IscrizioniController@segreteria')->name('segreteria');
Route::get('associazione', 'IscrizioniController@asd')->name('asd');
