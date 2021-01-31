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
//     return view('quotation.index');  # view('welcome')
// });

use App\Http\Controllers\QuotationController;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'QuotationController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'QuotationController@add')->name('home');
Route::get('quotation', 'QuotationController@index');
Route::get('quotation/create', 'QuotationController@create')->name('create');
Route::post('quotation/create', 'QuotationController@store')->name('store');
Route::get('quotation/{id}/update', 'QuotationController@edit')->name('edit');
Route::put('quotation/{id}', 'QuotationController@update')->name('update');
Route::delete('quotation/{id}', 'QuotationController@destroy')->name('delete');
Route::get('quotation/mybook', 'QuotationController@add')->name('mypage');
Route::get('quotation/list', 'QuotationController@list')->name('list');

Route::get('quotation/{id}/add', 'QuotationController@addcheck')->name('check');
Route::post('quotaion/add', 'QuotationController@regist')->name('regist');
