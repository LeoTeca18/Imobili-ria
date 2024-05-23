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

#Geral-------------------------------------------------------------------
Route::get('/', function () {
    return view('geral/home');
});

Route::get('/login', function () {
    return view('geral/login');
});

#Cliente-------------------------------------------------------------------
Route::get('/cliente', function () {
    return view('cliente/iniC');
});

Route::get('/comprados', function () {
    return view('cliente/comprados');
});

Route::get('/reservas', function () {
    return view('cliente/reservas');
});

Route::get('/visita', function () {
    return view('cliente/visita');
});

Route::get('/alugadosC', function () {
    return view('cliente/alugados');
});

Route::get('/ver', function () {
    return view('cliente/ver');
});


Route::get('/info', function () {
    return view('cliente/info');
});

#Proprietário-------------------------------------------------------------------
Route::get('/proprietario', function () {
    return view('proprietario/iniP');
});

Route::get('/adicionar', function () {
    return view('proprietario/adicionar');
});

Route::get('/alugadosP', function () {
    return view('proprietario/alugados');
});

Route::get('/vendidosP', function () {
    return view('proprietario/vendidos');
});

#Negociante-------------------------------------------------------------------
Route::get('/negociante', function () {
    return view('funcionario/negociante/iniN');
});

Route::get('/vendidosN', function () {
    return view('funcionario/negociante/vendidos');
});

Route::get('/alugadosN', function () {
    return view('funcionario/negociante/alugados');
});

#Gestor-------------------------------------------------------------------
Route::get('/gestor', function () {
    return view('funcionario/gestor/iniG');
});

Route::get('/aceites', function () {
    return view('funcionario/gestor/aceites');
});

Route::get('/negados', function () {
    return view('funcionario/gestor/negados');
});