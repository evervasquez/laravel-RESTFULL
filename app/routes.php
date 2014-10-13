<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the router for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return \bibliotecaunsm\Entity\Facultad::all();
    return View::make('layout');
});

Route::resource('facultades','FacultadsController');
Route::resource('materias','MateriasController');