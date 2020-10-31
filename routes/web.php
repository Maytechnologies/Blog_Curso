<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', HomeController::class)->name('home');

//nuevo metodologia para enrutas todos los metodos del controlador con recursos en nuestro web.php
Route::resource('cursos', CursoController::class);

//este metodo lo aplicamos cuando queremos acceder a una vista que no utilizara
//informacion de nuestra base de datos
Route::view('nosotros', 'nosotros')->name('nosotros');

//Ruta para realizar envio de correos test 

Route::get('contacto', function(){

    $correo = new ContactoMailable;
    Mail::to('staroffic@gmail.com')->send($correo);

    return "Email Enviado Correctamente";
});

//definicion individual de las rutas
/*Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{id}/edit', [CursoController::class])->name('cursos.edit');
Route::post('cusros/{cursos}', [CursoController::class, 'destroy'])->name('cursos.destroy');*/


//Enlace del proyecto en github
//git remote add origin https://github.com/Maytechnologies/Blog_Curso.git






