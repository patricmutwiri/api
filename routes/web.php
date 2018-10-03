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
Route::get('/customers', 'CustomersController@index')->name('customers');
Route::get('/verify/{account}', 'CustomersController@show')->name('customer');
Route::get('/bills', 'BillsController@index')->name('bills');
Route::get('/bill/{account}', 'BillsController@show')->name('bill');
Route::get('/statements', 'StatementsController@index')->name('statements');
Route::get('/statement/{account}', 'StatementsController@show')->name('statement');
Route::get('/balances', 'BalancesController@index')->name('balances');
Route::get('/balance/{account}', 'BalancesController@show')->name('balance');
