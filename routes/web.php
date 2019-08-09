<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//========ROTAS DO APP======
Route::get('/', '\App\Modules\Painel\Controllers\PainelController@index');

Route::group(['prefix'=>'painel'], function(){
    Route::get('turma', '\App\Modules\Turma\Controllers\TurmaController@index');
    Route::get('turma/mostrar', '\App\Modules\Turma\Controllers\TurmaController@show');
    Route::post('turma/nova', '\App\Modules\Turma\Controllers\TurmaController@store');
    Route::post('turma/edit', '\App\Modules\Turma\Controllers\TurmaController@update');
    Route::get('turma/remover', '\App\Modules\Turma\Controllers\TurmaController@destroy');

    Route::get('aluno', '\App\Modules\Aluno\Controllers\AlunoController@index');
    Route::get('aluno/mostrar', '\App\Modules\Aluno\Controllers\AlunoController@show');
    Route::post('aluno/novo', '\App\Modules\Aluno\Controllers\AlunoController@store');
    Route::post('aluno/edit', '\App\Modules\Aluno\Controllers\AlunoController@update');
    Route::get('aluno/remover', '\App\Modules\Aluno\Controllers\AlunoController@destroy');
    Route::get('aluno/generate', '\App\Modules\Aluno\Controllers\AlunoController@generateAlunos');
});