<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\TarefaController;

Route::get('/',[TarefaController::class, 'index']);
Route::get('/sobre',[TarefaController::class, 'sobre']);
Route::get('/cadastrar',[TarefaController::class, 'create']);
Route::post('/cadtarefa',[TarefaController::class, 'store']);
Route::delete('/deletar/{id}',[TarefaController::class, 'destroy']);
Route::get('/editar/{id}',[TarefaController::class, 'edit']);
Route::put('/editar/{id}',[TarefaController::class, 'update'])->name('editar.tarefa');
