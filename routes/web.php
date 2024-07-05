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
Route::get('/tela_cadastro', function(){
    return view('tela_cadastro');
});
Route::get('/tela_bios', function(){
    return view('tela_bios');
});
Route::get('/SOGA', function(){
    return view('SOGA');
});
Route::get('/tela_perfil', function(){
    return view('tela_perfil');
});
Route::get('/tela_chat', function(){
    return view('tela_chat');
});

