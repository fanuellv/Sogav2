<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PasswordEncryptionController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/feed', function() {
    return view('feed');
})->name('feed');

Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login/store', [loginController::class,'store'])->name('login.store');

Route::get('/encrypt-passwords', [PasswordEncryptionController::class, 'encryptPasswords']);

Route::get('/cadastrar', function(){
    return view('cadastrar');
});
Route::get('/cadastra-se', function(){
    return view('cadastra-se');
});