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
<<<<<<< HEAD
Route::get('ShowDeals/{deal}','DealsController@show');


Route::get('/Compte','compeController@index');
Route::view('/usercompte','usercompte');
Route::get('/user', 'SuperAdminController@index');

=======


Route::get('/Compte','compeController@index');
Route::get('/user', 'SuperAdminController@index');

Route::view('/usercompte','usercompte');
>>>>>>> master


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
<<<<<<< HEAD
 Route::put('/editdeal/update/{deal}','dealsController@update');
=======
 Route::get('/editdeal/update/{deal}','dealsController@update');
>>>>>>> master


 Route::get('/UsersManagements', 'UsersController@index');
 Route::get('/edituser/{user}','UsersController@edit');
 Route::put('/edituser/update/{user}','UsersController@update');
 Route::get('/DestroyUser/{user}','UsersController@destroy');



 Route::get('/ListeTikets', 'TicketsController@ListeTikets');
<<<<<<< HEAD
 Route::get('ShowTicket/{ticket}','TicketsController@show');


=======
>>>>>>> master
 Route::get('/TiketsManagements', 'TicketsController@index');
 Route::get('/CreateTickets', 'TicketsController@Create');
 Route::post('/CreateticketStore','TicketsController@store');
 Route::get('/EditTicket/{ticket}','TicketsController@edit');
 Route::put('/EditTicket/update/{ticket}','TicketsController@update');
 Route::get('/DestroyTicket/{ticket}','TicketsController@destroy');



 Route::post('/EnvoyerMessage','Contactcontroller@store');
 Route::get('/MessagesManagements', 'Contactcontroller@index');
 Route::get('/ShowMessage/{message}','Contactcontroller@show');
