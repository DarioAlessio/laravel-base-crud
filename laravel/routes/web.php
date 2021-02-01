<?php


Route::get('/', 'CarController@index') -> name('car-index');

Route::get('/car/{id}', 'CarController@show') -> name('car-show');

Route::get('/new/car', 'CarController@create') -> name('car-create');

Route::post('/new/car/store', 'CarController@store')-> name('car-store');
