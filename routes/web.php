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
    return view('siswa/home');
});

Route::get('/profile', function () {
    return view('page_profile');
});

// guna banget buat grouping routingnya

Route::group(['prefix' => 'admin'], function(){
    Route::get('users', function(){
        return ('Ini Page Admins / Users 0');
    });

    Route::get('users1', function(){
        return ('Ini Page Admins / Users 1');
    });
});

Route::get('/profile_view/{nama}/{belakang}', function($nama, $belakang){
    return view('page_profile')->with('nugi',$nama)
                                ->with('c',$belakang);
});

Route::get('/ib/{a}/{b}', function($a, $b){
    return view('template/pageNugi')
    ->with('event',$a)
    ->with('th',$b);
});

Route::get('/content/{a}', 'ContohController@tampilkan');

Route::get('/content_lain/', function(){
   return view('content_lain'); 
});

// Route::get('/input','ContohController@input');

Route::post('/input_form_post','ContohController@input_post');

Route::get('/mahasiswa', 'ContohController@table');

// untuk yang baru ada di sini
Route::get('/siswa', 'ContohController@form');
Route::get('/table02','ContohController@table02');
Route::get('/{id}/edit','ContohController@edit');

Route::post('/input', 'ContohController@insert');
Route::post('/{id}/delete','ContohController@delete');

Route::post('/{id}/edit','ContohController@update');