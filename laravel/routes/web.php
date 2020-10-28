<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('clients');
})->name('clients');
*/

//Страница добавления клиента (форма)
Route::get('/add', function () { return view('add'); })->name("add");

//Страница редактирования клиента (форме)
Route::get('/edit/{id}', 'App\Http\Controllers\AddController@EditClient')->name("edit");

//Страница списка всех клиентов (таблица)
Route::get('/', 'App\Http\Controllers\AddController@AllClients')->name("clients");

//Функция уделения клиента
Route::get('/function/delete/{id}', 'App\Http\Controllers\AddController@DeleteClient')->name("delete_client");

//Функция редактирования клиента
Route::post('/function/edit/{id}', 'App\Http\Controllers\AddController@SaveClient')->name("edit_client");

//Функция добавления клиента
Route::post('/function/add', 'App\Http\Controllers\AddController@AddClient')->name("add_client");
