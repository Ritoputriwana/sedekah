<?php
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
