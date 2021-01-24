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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('quotation', 'QuotationController@index');
Route::get('quotation/add', 'QuotationController@create');
Route::post('quotation/add', 'QuotationController@store');
Route::get('quotation/{id}/update', 'QuotationController@edit');
Route::put('quotation/{id}', 'QuotationController@update');
Route::delete('quotation/{id}', 'QuotationController@destroy');
