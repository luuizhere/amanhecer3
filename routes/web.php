<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('nivel', 'NivelController');
    Route::resource('habilidade', 'HabilidadeController');
    Route::resource('atividade', 'AtividadeController');
    Route::resource('paciente', 'PacienteController');
    Route::resource('resposta', 'RespostaController');
    Route::resource('consulta', 'ConsultaController');
    Route::get('consultas/{paciente_id}', 'ConsultaController@consultaByPaciente');

});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
