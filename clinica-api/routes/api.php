<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('accedido')->get('/pacientes/todos', [PacienteController::class, 'todosListar']);
Route::middleware('accedido')->get('/pacientes/filtrados/{eliminados}', [PacienteController::class, 'fitradosListar']);
Route::middleware('accedido')->post('/paciente/crear', [PacienteController::class, 'store']);
Route::middleware('accedido')->post('/paciente/modificar', [PacienteController::class, 'update']);
Route::middleware('accedido')->delete('/paciente/{id}/eliminar', [PacienteController::class, 'delete']);

Route::middleware('accedido')->get('/citas/desde/{desde}/hasta/{hasta}/paginas/{paginas}', [CitaController::class, 'filtrarPorFecha']);
Route::middleware('accedido')->get('/citas/paciente/{paciente}', [CitaController::class, 'filtrarPorPaciente']);
Route::post('/usuario/acceder', [UsuarioController::class, 'acceder']);