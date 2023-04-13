<?php

use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', [MeuControlador::class, 'produtos']);
Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'idade']);
Route::get('multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']);

//Route::resource('clientes', ClienteControlador::class);
