<?php

use Illuminate\Support\Facades\Route;


Route::get('/','basicCurdController@onSelect');


Route::get('/insert',function(){
    return view('insert');
});

Route::post('/insertdata','basicCurdController@onInsert');

Route::get('/delete', function(){
    return view('delete');
});

Route::post('/deleteData','basicCurdController@onDelete');

Route::any('/updateData','basicCurdController@onUpdate');


Route::get('/update',function(){
    return view('update');
});



