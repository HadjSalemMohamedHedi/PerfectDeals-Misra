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
Route::view('home','welcome');
Route::view('contactus','contactus');
Route::get('Deals','DealsController@index2');
Route::get('/Compte','compeController@index');
Route::view('/usercompte','usercompte');
Route::get('/user', 'SuperAdminController@index');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('Compte');
 });

 Route::get('/admin', 'AdminController@index');
 Route::get('/DealsManagements', 'DealsController@index');
 Route::get('/CreateDeal', 'DealsController@Create');
 Route::post('/CreateDealStore','dealsController@store');
 Route::get('/destroy/{deal}','dealsController@destroy');
 Route::get('/editdeal/{deal}','dealsController@edit');
 Route::put('/editdeal/update/{deal}','dealsController@update');


 Route::get('/UsersManagements', 'UsersController@index');
 Route::get('/TiketsManagements', 'TicketsController@index');


