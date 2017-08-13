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

// Route::get('/home', function () {
//     return view('home');
// }

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/jual', function () {
//     return view('formjual');
// });

// Route::get('/beli', function () {
//     return view('formpembeli');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/hu', function () {
    return view('login');
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'web'], function(){
	Route::auth();
});

Route::group(['middleware'=>['web','auth']], function(){
	Route::get('/home','HomeController@index');
	Route::get('/',function(){
		if(Auth::user()->admin==1){
			return view('home');
		}else{
			return view('home1');
		}
	});

  Route::get('/sedekahbarang', function () {
    if(Auth::user()->admin==1){
			return view('home');
		}else{
			return view('sedekahbarang');
		}
  });
});
