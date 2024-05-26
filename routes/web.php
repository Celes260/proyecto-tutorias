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
   $grupo = new grupo();
   $grupo->grupo = "arriaga";
  
  
   $grupo->save();

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

Route::get('/viewAgregarGrupo', [App\Http\Controllers\GrupoController::class, 'viewAgregarGrupo'])->name('viewAgregarGrupo');
Route::post('/agregarGrupo', [App\Http\Controllers\GrupoController::class, 'agregarGrupo'])->name('agregarGrupo');
Route::get('/viewActualizarGrupo/{id}', [App\Http\Controllers\GrupoController::class, 'viewActualizarGrupo'])->name('viewActualizarGrupo');
Route::get('/actualizarGrupo/{id}', [App\Http\Controllers\GrupoController::class, 'actualizarGrupo'])->name('actualizarGrupo');
Route::get('/confirmarEvaluacion', [App\Http\Controllers\PreguntaController::class, 'confirmarEvaluacion'])->name('confirmarEvaluacion');
Route::get('/verEvaluacion/{id}', [App\Http\Controllers\TutorController::class, 'verEvaluacion'])->name('verEvaluacion');

Route::post('/generarPDF', [App\Http\Controllers\TutorController::class, 'reporte'])->name('generarPDF'); 
Route::get('/comentarios/{id}', [App\Http\Controllers\TutorController::class, 'comentarios'])->name('comentarios'); 
Route::get('/evaluacion', [App\Http\Controllers\PreguntaController::class, 'evaluacion'])->name('evaluacion'); 
Route::get('/reporteCarrera', [App\Http\Controllers\PreguntaController::class, 'reporteCarrera'])->name('reporteCarrera'); 