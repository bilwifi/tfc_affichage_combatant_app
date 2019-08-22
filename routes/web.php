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

Route::get('/', function () {
    return redirect()->route('home');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@redirectionAfficheCombat');
Route::get('/player/{combatant}', 'HomeController@afficheCombatant')->name('affiche_combatant');
Route::get('/Combat/{premier_combatant}/vs/{dexieme_combatant}', 'HomeController@afficheCombat')->name('affiche_combat');
Route::get('dowload-img/{combatant}','HomeController@showJqueryImageUpload')->name('upload-img-combatant');
Route::post('dowload-img','HomeController@saveJqueryImageUpload')->name('upload-img');
Route::resource('/gestion_combatants','GestionCombatants');
