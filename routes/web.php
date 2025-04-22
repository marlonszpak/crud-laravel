<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;

Route::get('/', [AlunoController::class, 'index'])->name('home');

// Alunos
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('/alunos/{id}', [AlunoController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('alunos.destroy');

// Cursos
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');
