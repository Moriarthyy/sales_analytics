<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



//registro
Route::get('/registro', [LoginController::class, 'registerView'])->name('register.get');


Route::get('/', [LoginController::class, 'loginView'])->name('login.get');



require __DIR__.'/settings.php';
