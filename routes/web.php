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
    return view('welcome');
});
/*Route::get('/inscription',function(){
	return view('inscription');
});
Route::get('/Connexion',function(){
	return view('Connexion');
});
/* recuperer le nouvel utilisateur et l'inserer dans la base de donnée*/
Route::post('/inscription', function () {
		$utilisateur = new App\User;
		$utilisateur->name=request('name');
	$utilisateur->email=request('email');
	$utilisateur->password=request('password');
	$utilisateur->save();
    return 'Votre email est ' . request('email');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('store', 'AlbumControllerV@store')->name('store');

//ici jutilise le controller photoController1 par exemple pour retourner une vue
Route::post('upload', 'PhotoControllerV@store')->name('upload');

Auth::routes();
 Route::post('register', 'AuthController@register');
 Route::post('home', 'AuthController@login');




