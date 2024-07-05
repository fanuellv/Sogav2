<?php

use App\Http\Controllers\AmigoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cadastrarController;
use App\Http\Controllers\feedController;
use App\Http\Controllers\grupoController;
use App\Http\Controllers\postagemController;
use App\Http\Controllers\PasswordEncryptionController;

Route::get('/', function () {
    return view('welcome');
});

// Route for feed (authenticated users only)
Route::middleware(['auth'])->group(function () {
    Route::get('/feed', [feedController::class, 'index'])->name('feed');
});

// Routas para login
Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login/store', [loginController::class,'store'])->name('login.store');
Route::post('/logout', [loginController::class,'destroy'])->name('login.destroy');

// Route for password encryption
Route::get('/encrypt-passwords', [PasswordEncryptionController::class, 'encryptPasswords']);

// Routes for user registration and profile
Route::get('/cadastrar', [cadastrarController::class,'create'])->name('cadastro');
Route::post('/cadastrar/store', [cadastrarController::class,'store'])->name('cadastro.store');
Route::get('/cadastrar/perfil', [cadastrarController::class,'createPerfil'])->name('cadastro.perfil');
Route::post('/cadastrar/perfil/store', [cadastrarController::class, 'storePerfil'])->name('perfil.store'); 
Route::get('/cadastrar/perfil/bio', [cadastrarController::class,'CreateBio'])->name('cadastro.end');
Route::post('/cadastrar/perfil/bio/store', [cadastrarController::class,'storeBio'])->name('bio.store');
Route::post('/cadastrar/edit', [cadastrarController::class,'edit'])->name('cadastrar.edit');


//Routa para  postagem
Route::post('/criarPostagem', [postagemController::class,'store'])->name('CriarPostagem');
Route::get('/criarPostagem', [postagemController::class,'store'])->name('CriarPostagem');

//ROuta Amigo
Route::middleware('auth')->group(function () {
    Route::get('/amigo', [AmigoController::class,'index'])->name('amigo');
    Route::post('/amigos/enviar/{id}', [AmigoController::class, 'enviarSolicitacao'])->name('amigos.enviar');
    Route::post('/amigos/aceitar/{id}', [AmigoController::class, 'aceitarSolicitacao'])->name('amigos.aceitar');
    Route::post('/amigos/recusar/{id}', [AmigoController::class, 'recusarSolicitacao'])->name('amigos.recusar');
});

//routa grupo
Route::middleware('auth')->group(function () {
    Route::get('/grupo', [grupoController::class,'index'])->name('grupo');
    Route::post('/grupo', [grupoController::class,'store'])->name('grupo.store');
});
