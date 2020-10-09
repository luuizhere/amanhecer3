<?php

use App\Atividade;
use App\Habilidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/habilidades/{id}', function($nivel_id){
    // dd(1);
   $habilidades =  Habilidade::where('nivel_id',$nivel_id)->get();
   echo "<option default>Selecione</option>";
   foreach($habilidades as $hab)
   {
       echo "<option value=".$hab->id.">".$hab->nome."</option>";
   }
});


Route::get('/atividades/{id}', function($nivel_id){
    // dd(1);
   $atividades =  Atividade::where('nivel_id',$nivel_id)->get();
   echo "<option default>Selecione</option>";
   foreach($atividades as $atividade)
   {
       echo "<option value=".$atividade->id.">".$atividade->nome."</option>";
   }
});



