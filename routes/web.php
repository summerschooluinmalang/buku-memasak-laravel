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

Route::group(['prefix'=>'home/blog', 'middleware'=>'auth', 'as'=>'blog.', 'name' => 'blog'], function (){
	Route::get('/', 'BlogController@index')->name('index');
	Route::get('create', 'BlogController@create')->name('create');
	Route::post('store', 'BlogController@store')->name('store');
	Route::get('show/{id}', 'BlogController@show')->name('show');
	Route::get('edit/{id}', 'BlogController@edit')->name('edit');
	Route::put('update/{id}', 'BlogController@update')->name('update');
	Route::delete('delete/{id}', 'BlogController@destroy')->name('delete');
});


Route::post('/pengurangan/{angka1}/{angka2}', 'BlogController@pengurangan');


Route::group(['prefix' => 'admin'], function () {
	
	Route::get('/test', function() {
		return "test";
	});

	Route::post('/test', function() {
		return "test";
	});

});

Route::get('/laravel/{versi}', function ($versi) {
	return $versi;
});


Route::get('/blog/index', 'BlogController@index');


Route::get('/hitung/{angka1}/{angka2}', function($angka1, $angka2) {
	return $angka1+$angka2;
});


Route::get('/kalkulator/{operator}/{angka1}/{angka2}', function($operator, $angka1, $angka2) {
	if ($operator=="tambah") {
		return $angka1+$angka2;
	}else if($operator=="kurang") {
		return $angka1-$angka2;
	}else if($operator=="kali") {
		return $angka1*$angka2;
	}else if($operator=="bagi") {
		return $angka1/$angka2;
	}else{
		return "parameter tidak ada";
	}
});


Route::get('/penjumlahan/{angka1}/{angka2}', 'BlogController@penjumlahan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
