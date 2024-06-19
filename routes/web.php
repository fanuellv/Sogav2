<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/feed', function(){
    return view('feed');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/cadastrar', function(){
    return view('cadastrar');
});
Route::get('/cadastra-se', function(){
    return view('cadastra-se');
});