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
    return view('index');
});

Auth::routes();

Route::middleware('auth', 'admin')->get('/home', 'ReservationController@index')->name('home');


Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin', 'ajaxCheck'], 'prefix' => 'admin'],function(){
    Route::post('room/store', 'RoomController@store')->name('room.store');
    Route::get('room/index', 'RoomController@index')->name('room.index');
    Route::get('user/index', 'Auth\RegisterController@index')->name('user.index');
  //Route::get('show/modal', 'Auth\RegisterController@showModal')->name('show.modal');
    Route::get('edit/{id}', 'Auth\RegisterController@showModal');
   	Route::resource('contact', 'ContactController');
    Route::get('/contact/approve/{id}', 'ContactController@approve');
    Route::get('/contact/unapprove/{id}', 'ContactController@unApprove');
    Route::get('/contact/destroy/{id}', 'ContactController@delete');

});

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'] ,'prefix' => 'admin'],function(){
	Route::resource('room', 'RoomController');
	Route::resource('contact', 'ContactController');
	Route::resource('payment', 'PaymentController');
	Route::get('/profit', 'PaymentController@profit')->name('profit');
	Route::get('payment/print/{id}', 'PaymentController@print')->name('payment.print');
	Route::resource('newsletter', 'NewsLetterController');
	Route::get('/register', 'Auth\RegisterController@show')->name('register');
	Route::post('/register', 'Auth\RegisterController@create')->name('register');

});

Route::middleware('auth', 'admin', 'ajaxCheck')->post('/admin/room/{id}', 'RoomController@destory');
Route::middleware('auth', 'admin', 'ajaxCheck')->post('/admin/user/destroy/{id}', 'Auth\RegisterController@destroy');


Route::group(['as' => 'booking.', 'prefix' => 'booking'], function(){
	Route::resource('reservation', 'ReservationController');
	Route::get('/show/{id}', 'ReservationController@showConfirmedUser')->name('show');

});





// Route::middleware('auth', 'admin')->group(function(){
// 	Route::get('/home', 'ReservationController@index')->name('home');
// });
