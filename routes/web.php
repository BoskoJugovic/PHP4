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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/izvodjac', 'App\Http\Controllers\IzvodjacController@index')->name('izvodjac.index');
Route::get('/izvodjac/details/{id}', 'App\Http\Controllers\IzvodjacController@details')->name('izvodjac.details')->middleware('auth');
Route::get('/izvodjac/add', 'App\Http\Controllers\IzvodjacController@add')->name('izvodjac.add')->middleware('auth');
Route::post('/izvodjac/insert', 'App\Http\Controllers\IzvodjacController@insert')->name('izvodjac.insert')->middleware('auth');
Route::get('/izvodjac/edit/{id}', 'App\Http\Controllers\IzvodjacController@edit')->name('izvodjac.edit')->middleware('auth');
Route::post('/izvodjac/update/{id}', 'App\Http\Controllers\IzvodjacController@update')->name('izvodjac.update')->middleware('auth');
Route::get('/izvodjac/delete/{id}', 'App\Http\Controllers\IzvodjacController@delete')->name('izvodjac.delete')->middleware('auth');

Route::get('/dobavljac', 'App\Http\Controllers\DobavljacController@index')->name('dobavljac.index');
Route::get('/dobavljac/details/{id}', 'App\Http\Controllers\DobavljacController@details')->name('dobavljac.details')->middleware('auth');
Route::get('/dobavljac/add', 'App\Http\Controllers\DobavljacController@add')->name('dobavljac.add')->middleware('auth');
Route::post('/dobavljac/insert', 'App\Http\Controllers\DobavljacController@insert')->name('dobavljac.insert')->middleware('auth');
Route::get('/dobavljac/edit/{id}', 'App\Http\Controllers\DobavljacController@edit')->name('dobavljac.edit')->middleware('auth');
Route::post('/dobavljac/update/{id}', 'App\Http\Controllers\DobavljacController@update')->name('dobavljac.update')->middleware('auth');
Route::get('/dobavljac/delete/{id}', 'App\Http\Controllers\DobavljacController@delete')->name('dobavljac.delete')->middleware('auth');


Route::get('/narucilac', 'App\Http\Controllers\NarucilacController@index')->name('narucilac.index');
Route::get('/narucilac/details/{id}', 'App\Http\Controllers\NarucilacController@details')->name('narucilac.details')->middleware('auth');
Route::get('/narucilac/add', 'App\Http\Controllers\NarucilacController@add')->name('narucilac.add')->middleware('auth');
Route::post('/narucilac/insert', 'App\Http\Controllers\NarucilacController@insert')->name('narucilac.insert')->middleware('auth');
Route::get('/narucilac/edit/{id}', 'App\Http\Controllers\NarucilacController@edit')->name('narucilac.edit')->middleware('auth');
Route::post('/narucilac/update/{id}', 'App\Http\Controllers\NarucilacController@update')->name('narucilac.update')->middleware('auth');
Route::get('/narucilac/delete/{id}', 'App\Http\Controllers\NarucilacController@delete')->name('narucilac.delete')->middleware('auth');

Route::get('/sektorOdrzavanja', 'App\Http\Controllers\SektorOdrzavanjaController@index')->name('sektorOdrzavanja.index');
Route::get('/sektorOdrzavanja/details/{id}', 'App\Http\Controllers\SektorOdrzavanjaController@details')->name('sektorOdrzavanja.details')->middleware('auth');
Route::get('/sektorOdrzavanja/add', 'App\Http\Controllers\SektorOdrzavanjaController@add')->name('sektorOdrzavanja.add')->middleware('auth');
Route::post('/narucsektorOdrzavanjailac/insert', 'App\Http\Controllers\SektorOdrzavanjaController@insert')->name('sektorOdrzavanja.insert')->middleware('auth');
Route::get('/sektorOdrzavanja/edit/{id}', 'App\Http\Controllers\SektorOdrzavanjaController@edit')->name('sektorOdrzavanja.edit')->middleware('auth');
Route::post('/sektorOdrzavanja/update/{id}', 'App\Http\Controllers\SektorOdrzavanjaController@update')->name('sektorOdrzavanja.update')->middleware('auth');
Route::get('/sektorOdrzavanja/delete/{id}', 'App\Http\Controllers\SektorOdrzavanjaController@delete')->name('sektorOdrzavanja.delete')->middleware('auth');

Route::get('/projekat', 'App\Http\Controllers\ProjekatController@index')->name('projekat.index');
Route::get('/projekat/details/{id}', 'App\Http\Controllers\ProjekatController@details')->name('projekat.details')->middleware('auth');
Route::get('/projekat/add', 'App\Http\Controllers\ProjekatController@add')->name('projekat.add')->middleware('auth');
Route::post('/projekat/insert', 'App\Http\Controllers\ProjekatController@insert')->name('projekat.insert')->middleware('auth');
Route::get('/projekat/edit/{id}', 'App\Http\Controllers\ProjekatController@edit')->name('projekat.edit')->middleware('auth');
Route::post('/projekat/update/{id}', 'App\Http\Controllers\ProjekatController@update')->name('projekat.update')->middleware('auth');
Route::get('/projekat/delete/{id}', 'App\Http\Controllers\ProjekatController@delete')->name('projekat.delete')->middleware('auth');

Route::get('/usluga', 'App\Http\Controllers\UslugaController@index')->name('usluga.index');
Route::get('/usluga/details/{id}', 'App\Http\Controllers\UslugaController@details')->name('usluga.details')->middleware('auth');
Route::get('/usluga/add', 'App\Http\Controllers\UslugaController@add')->name('usluga.add')->middleware('auth');
Route::post('/usluga/insert', 'App\Http\Controllers\UslugaController@insert')->name('usluga.insert')->middleware('auth');
Route::get('/usluga/edit/{id}', 'App\Http\Controllers\UslugaController@edit')->name('usluga.edit')->middleware('auth');
Route::post('/usluga/update/{id}', 'App\Http\Controllers\UslugaController@update')->name('usluga.update')->middleware('auth');
Route::get('/usluga/delete/{id}', 'App\Http\Controllers\UslugaController@delete')->name('usluga.delete')->middleware('auth');


Route::view('home', 'home')->middleware('auth');


