<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;


// etudiant
Route::get('/', [EtudiantController::class, 'Home']);
Route::post('/', [EtudiantController::class, 'Connect'])->name('acceuil');
Route::get('/notes', [EtudiantController::class, 'notes'])->name('notes');
Route::get('/classement', [EtudiantController::class, 'Classement'])->name('classement');
Route::get('/ClassementParLangageC', [EtudiantController::class, 'ClassementParLangageC'])->name('ClassementParLangageC');
Route::delete('/{id}', [EtudiantController::class, 'destroy'])->name('destroy');
// admin
Route::get('/dashboard', [AdminController::class, 'Dashboard']);
Route::get('/ajouter', [AdminController::class, 'Ajouter'])->name('ajouter');
Route::post('/ajouter', [AdminController::class, 'store'])->name('store');
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::patch('/edit/{id}', [AdminController::class, 'update']);
Route::get('/voir/{id}', [AdminController::class, 'voir'])->name('voir');
Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');

