<?php


Route::get('/', 'CreatesController@home');

Route::get('/create', function(){
	return view('create');
});

Route::post('/insert', 'CreatesController@add');

Route::get('/update/{id}', 'CreatesController@update');

Route::post('/edit/{id}', 'CreatesController@edit');

Route::get('/read/{id}', 'CreatesController@read');

Route::get('/delete/{id}', 'CreatesController@delete');