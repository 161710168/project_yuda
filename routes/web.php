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


Route::get('latihan','latihan@index');
Route::get('isibarang','latihan@barang');
Route::get('barang','latihan@viewbarang');
Route::get('babarang','latihan@babarang');
Route::get('testing',function(){
	return view('layout.master');
});

Route::get('paragraph',function(){
	return view('konten');
});
Route::get('picture',function(){
	return view('picture');
});

Route::get('testing2',function(){
	return view('latihan');
});

Route::get('testing3',function(){
	return view('custom2');
});

Route::get('testing4',function(){
	$a= \App\barang::all();
	return view('barang2',compact('a'));
});
Route::get('Data',function(){
	return view('Data');
});

Route::get('/escape','AboutController@index');
Route::get('/testtemplate','AboutController@template');
Route::get('/testtemplate2','AboutController@template2');
Route::get('/testtemplate3','AboutController@template3');
Route::get('/testtemplate4','AboutController@template4');
Route::get('/testtemplate5','AboutController@template5');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
