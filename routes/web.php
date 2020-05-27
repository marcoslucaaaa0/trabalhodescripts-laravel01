<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('Principal');
});

Route::get("/principal/","PrincipalController@principal")->name('principal');
Route::get("/tenisdecorrida/","TenisCorridaController@corrida")->name('corrida');
Route::get("/skateesurf/","SkateESurfController@skateesurf")->name('skateesurf');
Route::get("/basquete/","BasqueteController@basquete")->name('basquete');
Route::get("/artesmarcias/","ArtesMarciaisController@artesmarcias")->name('artesmarcias');
Route::get("/login/","LoginController@login")->name('login');
Route::post("/logar/","LoginController@logar")->name('logar');
Route::get("/comprar/","ComprarController@comprar")->name('comprar');





