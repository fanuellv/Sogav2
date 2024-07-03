<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cadastrarController;
use App\Http\Controllers\feedController;
use App\Http\Controllers\PasswordEncryptionController;

Route::get('/', function () {
    return view('welcome');
});

// Route for feed (authenticated users only)
Route::middleware(['auth'])->group(function () {
    Route::get('/feed', [feedController::class, 'index'])->name('feed');
});

// Routes for login
Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login/store', [loginController::class,'store'])->name('login.store');

// Route for password encryption
Route::get('/encrypt-passwords', [PasswordEncryptionController::class, 'encryptPasswords']);

// Routes for user registration and profile
Route::get('/cadastrar', [cadastrarController::class,'create'])->name('cadastro');
Route::post('/cadastrar/store', [cadastrarController::class,'store'])->name('cadastro.store');
Route::get('/cadastrar/perfil', [cadastrarController::class,'createPerfil'])->name('cadastro.perfil');
Route::post('/cadastrar/perfil/store', [cadastrarController::class, 'storePerfil'])->name('perfil.store'); // This line was updated to add a POST route for profile
Route::get('/cadastrar/perfil/bio', [cadastrarController::class,'CreateBio'])->name('cadastro.end');
