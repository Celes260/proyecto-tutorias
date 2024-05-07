<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;



use Illuminate\Support\Facades\Route;
use App\Models\grupo;

Route::get('/', function () {
   
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/preguntas', [App\Http\Controllers\PreguntaController::class, 'preguntas'])->name('preguntas');
Route::post('/enviarPreguntas', [App\Http\Controllers\PreguntaController::class, 'guardarPreguntas'])->name('preguntas.enviar');
Route::get('/agregarAlumno', [App\Http\Controllers\UserController::class, 'viewNuevoAlumno'])->name('agregarAlumno');
