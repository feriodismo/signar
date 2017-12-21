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

// Route::get('/', function () {
//     $titulo = 'home';
//     return view('landing', compact('titulo'));
// });
Route::get('/', 'PageController@landing')->name('landing');
Route::get('page/home', 'PageController@home')->name('home');

Route::get('page/subir', 'PageController@subir')->name('subir');
Route::get('page/permiso', 'PageController@permiso')->name('permiso');
Route::get('page/signar', 'PageController@signar')->name('signar');


// Route::get('subir', function () {
// 	$titulo = 'subir sonido';
//     return view('subir', compact('titulo'));
// });

Route::resource('uploads', 'UploadsController');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

//se crea esta ruta para el login
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('register', 'Auth\RegisterController@register');

Route::get('createuser', function(){

	App\User::create([
		'name' => 'nicole',
		'email' => 'romero@gmail.com',
		'password' => bcrypt('1234')
	]);

});
