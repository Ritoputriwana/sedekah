<?php

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() {
	return view ('home');
});

Route::group(['middleware'=>'web'], function(){
	Route::auth();
});

Route::group(['middleware'=>['web','auth']], function(){
	Route::get('/home','HomeController@index');
	Route::get('/',function(){
		if(Auth::user()->admin==1){
			return view('home');
		}else{
			return view('sedekahbarang');
		}
	});
});


Route::get('/contact', function() {
	return view ('contact');
});

Route::get('/beranda', function() {
	return view ('home');
});

Route::get('/penerima', function() {
	return view ('listpenerima');
});

Route::get('/barang', function() {
	return view ('daftar_barang');
});

Route::get('/penerima_sedekah', function() {
	return view ('daftar_penerima');
});

Route::get('/bajuanak', function() {
	return view ('barang.bajuanak');
});

Route::get('/arloji', function() {
	return view ('barang.arloji');
});

Route::get('/sepatunike', function() {
	return view ('barang.sepatunike');
});

Route::get('/stroller', function() {
	return view ('barang.stroller');
});

Route::get('/taswanita', function() {
	return view ('barang.taswanita');
});

Route::get('/boxbayi', function() {
	return view ('barang.boxbayi');
});