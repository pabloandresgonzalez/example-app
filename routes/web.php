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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleado', [App\Http\Controllers\EmpleadoController::class, 'index']);
Route::get('/empleado/create', [App\Http\Controllers\EmpleadoController::class, 'create']);
Route::post('/empleado', [App\Http\Controllers\EmpleadoController::class, 'store'])->name('store.empleado');
Route::get('/empleado/{empleado}/edit', [App\Http\Controllers\EmpleadoController::class, 'edit']);
Route::put('/empleado/{empleado}', [App\Http\Controllers\admin\EmpleadoController::class, 'update']);

//Route::get('/user/{user}/edit', [App\Http\Controllers\admin\UserController::class, 'edit']); //form edit
//Route::put('/user/{user}', [App\Http\Controllers\admin\UserController::class, 'update']);//envio form
