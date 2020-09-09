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

Route::get('/', 'controladorDePaginas@index');
Route::get('/about','controladorDePaginas@about');
Route::get('/ayuda','controladorDePaginas@ayuda');
Route::get('/estatus','controladorDePaginas@estatus');
Route::get('/contactanos','controladorDePaginas@contactanos');
Route::get('/desarrolladores','controladorDePaginas@desarrolladores');
Route::post('/createFollow','FollowsController@store');
Route::post('/deleteFollow','FollowsController@delete');

Route::get('/busqueda','controladorDePaginas@busqueda');

Route::resource('posts','PostController');
Route::resource('users','UsersController');
Route::resource('perfiles','PerfilController');
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
/*
Route::get('/users/{id}/{nombre}',function($id,$nombre){
    return 'este es el usuario '.$nombre.' con el id '.$id;
});



*/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
