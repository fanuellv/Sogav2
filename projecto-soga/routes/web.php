<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('feed');
});
Route::get('/cadastrar', function () {
    return view('cadastrar');
});
Route::get('/teste', function () {
    return view('teste');
});
