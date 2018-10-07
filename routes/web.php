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
     
    // echo str_pad(20, 4, '0', STR_PAD_LEFT);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//----------------------  Proposal   ----------------------------------
Route::get('/proposal', 'ProposalController@show')->name('proposal'); 
Route::get('/createprop', 'ProposalController@create')->name('createprop'); 
Route::post('/saveprop', 'ProposalController@save')->name('saveprop'); 
