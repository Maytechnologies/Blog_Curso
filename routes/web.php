<?php

use App\Http\Controllers\CursoController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//nuevo metodologia para registrar controladores con recursos en nuestro web.php
Route::resource('cursos', CursoController::class);

Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{id}/edit', [CursoController::class])->name('cursos.edit');

//Enlace del proyecto en github
//git remote add origin https://github.com/Maytechnologies/Blog_Curso.git





