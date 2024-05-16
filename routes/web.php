<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;



use Illuminate\Support\Facades\Route;
use App\Models\grupo;
use App\Models\tutor;

Route::get('/hola', function () {
   $tutor = new tutor();
   $tutor->nombre = "arriaga";
   $tutor->apellidoPaterno = "oscar";
   $tutor->apellidoMaterno = "Alvarez";
  
   $tutor->save();

});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mostrarAlumnos/{carrera}/{grupo?}', [App\Http\Controllers\UserController::class, 'mostrarAlumnos'])->name('mostrarAlumnos');
Route::get('/buscarAlumno/{carrera}', [App\Http\Controllers\UserController::class, 'buscarAlumno'])->name('buscarAlumno');

Route::get('/preguntas', [App\Http\Controllers\PreguntaController::class, 'preguntas'])->name('preguntas');
Route::post('/enviarPreguntas', [App\Http\Controllers\PreguntaController::class, 'guardarPreguntas'])->name('preguntas.enviar');
Route::get('/agregarAlumno', [App\Http\Controllers\UserController::class, 'viewNuevoAlumno'])->name('agregarAlumno');

Route::POST('/guardarAlumno', [App\Http\Controllers\UserController::class, 'guardarAlumno'])->name('guardarAlumno');

Route::get('/viewUpdate/{id}', [App\Http\Controllers\UserController::class, 'vistaUpdate'])->name('viewUpdate');
Route::post('/actualizandoAlumno/{id}', [App\Http\Controllers\UserController::class, 'actualizandoAlumno'])->name('actualizandoAlumno');

Route::get('/vistaEliminarAlumno', [App\Http\Controllers\UserController::class, 'vistaEliminarAlumno'])->name('vistaEliminarAlumno');
Route::get('/eliminarAlumno/{id}', [App\Http\Controllers\UserController::class, 'eliminarAlumno'])->name('eliminarAlumno');

Route::get('/agregarTutor', [App\Http\Controllers\TutorController::class, 'viewAgregarTutor'])->name('agregarTutor');
Route::post('/guardarTutor', [App\Http\Controllers\TutorController::class, 'guardarTutor'])->name('guardarTutor');
Route::get('/mostrarTutores/{carrera?}', [App\Http\Controllers\TutorController::class, 'viewMostrarTutores'])->name('mostrarTutores');
Route::get('/buscarTutor', [App\Http\Controllers\TutorController::class, 'buscarTutor'])->name('buscarTutor');
Route::get('/eliminarTutor/{id}', [App\Http\Controllers\TutorController::class, 'eliminarTutor'])->name('eliminarTutor');
Route::get('/vistaActualizarTutor/{id}', [App\Http\Controllers\TutorController::class, 'viewUpdateTutor'])->name('viewUpdateTutor');
Route::post('/actualizarAlumno/{id}', [App\Http\Controllers\TutorController::class, 'actualizarTutor'])->name('actualizarTutor');