<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CursoController;

// Route::get('/aula/{id}', [CursoController::class, 'show'])->middleware('auth');
// Route::post('/user', [CursoController::class, 'store']);

Route::get('/', [CursoController::class, 'index']);
Route::get('/contato', [CursoController::class, 'contato']);
Route::get('/consultoria', [CursoController::class, 'consultoria']);
Route::post('/cadastro', [CursoController::class, 'cadastro']);
Route::get('/cursos', [CursoController::class, 'cursos']);
Route::get('/aula/{id}', [CursoController::class, 'aula']);
Route::delete('/aula/{id}', [CursoController::class, 'destroy'])->middleware('auth');
Route::get('/edit/{id}', [CursoController::class, 'edit'])->middleware('auth');
Route::put('/update/{id}', [CursoController::class, 'update'])->middleware('auth');
Route::get('/create', [CursoController::class, 'criar'])->middleware('auth');
Route::post('/curso', [CursoController::class, 'store'])->middleware('auth');

Route::get('/join/{id}', [CursoController::class, 'joinCurso'])->middleware('auth');

Route::get('/dashboard', [CursoController::class, 'dashboard'])->middleware('auth');
Route::delete('/leave/{id}', [CursoController::class, 'leaveCurso'])->middleware('auth');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

