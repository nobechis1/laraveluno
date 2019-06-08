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

Route::get('/', 'PagesController@inicio');

Route::get('/amigos', function (){
   return 'hola amigos que tal,como estan?'; 
});

Route::get('/new', function(){
    return view('nuevo');
});

//Route::get('/new2', function(){
//    return view('nuevo2');
//});

Route::view('/new2', 'nuevo2');

Route::view('/new3', 'nuevo3');
Route::view('/one','uno');
