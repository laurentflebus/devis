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





Route::get('/', 'ConnexionController@afficherFormulaire');

Route::post('/', 'ConnexionController@traiterFormulaire');

Route::get('/inscriptionAuthentification', 'InscriptionController@visualiserFormulaire');

Route::post('/inscriptionAuthentification', 'InscriptionController@gererFormulaire');

Route::group([
  'middleware' => 'App\Http\Middleware\Auth',
], function() {

  Route::get('/inscription', 'InscriptionController@afficherFormulaire');

  Route::post('/inscription', 'InscriptionController@traiterFormulaire');

  Route::get('/mon-compte', 'CompteController@accueil');

  Route::get('/deconnexion', 'CompteController@deconnexion');

  Route::post('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');

  Route::get('/clients', 'ClientController@liste');

  Route::get('/{email}', 'ClientController@afficher');
});
