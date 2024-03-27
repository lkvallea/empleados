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


## LOGIN
Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/', 'App\Http\Controllers\Auth\LoginController@login');

##CONSULTAR
Route::get('/consultar', 'App\Http\Controllers\ConsultarEmpleosController@showConsultarEmpleadosForm');
//Route::get('/consultar', 'App\Http\Controllers\EmpleadosController@envioCsrf');

##CONFIGURAR EMPLEADOS
Route::get('/configurar', 'App\Http\Controllers\EmpleadosController@showAgregarEmpleadosForm');
Route::post('/configurar', 'App\Http\Controllers\EmpleadosController@agregarEmpleado');