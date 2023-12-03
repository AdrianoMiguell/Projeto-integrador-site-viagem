<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EstadoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CidadeController;
use App\Http\Controllers\Admin\ImagemCidadeController;
use App\Http\Controllers\Admin\PontoTuristicoController;
use App\Http\Controllers\Admin\ViagemController;
use App\Http\Controllers\Admin\ImagemTuristicaController;
use App\Http\Controllers\Admin\RoteiroController;
use App\Http\Controllers\UserController;
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

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'view')->name('welcome');
    Route::get('/view_viagem', 'view_viagem')->name('view.user.viagem');
    Route::get('/search_viagem', 'search_viagem')->name('search.viagem');
});

Route::middleware('auth')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/workspaceadmin', 'view')->middleware('verified')->name('workspaceadmin');
    });

    // view_roteiro_viagem

    Route::controller(EstadoController::class)->group(function () {
        Route::post('/estado_opcoes', 'create')->name('estado.opcoes');
        Route::put('/estado_opcoes', 'edit')->name('estado.opcoes');
        Route::delete('/estado_opcoes', 'delete')->name('estado.opcoes');
    });

    Route::controller(CidadeController::class)->group(function () {
        Route::post('/cidade_opcoes', 'create')->name('cidade.opcoes');
        Route::put('/cidade_opcoes', 'edit')->name('cidade.opcoes');
        Route::delete('/cidade_opcoes', 'delete')->name('cidade.opcoes');
    });

    Route::controller(ProfileController::class)->group(function () {

        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.edit');
        Route::delete('/profile', 'destroy')->name('profile.edit');
    });

    Route::controller(ViagemController::class)->group(function () {
        Route::get('/workspaceadmin_roteiro', 'view_roteiro')->name('viagem.view');
        Route::post('/viagem_opcoes', 'create')->name('viagem.opcoes');
        Route::put('/viagem_opcoes', 'edit')->name('viagem.opcoes');
        Route::delete('/viagem_opcoes', 'delete')->name('viagem.opcoes');
    });

    Route::controller(PontoTuristicoController::class)->group(function () {
        Route::post('/turismo_opcoes', 'create')->name('turismo.opcoes');
        Route::put('/turismo_opcoes', 'edit')->name('turismo.opcoes');
        Route::delete('/turismo_opcoes', 'delete')->name('turismo.opcoes');
    });
    // imagem_turistica.opcoes
    Route::controller(ImagemTuristicaController::class)->group(function () {
        Route::post('/imagem_turistica_opcoes', 'create')->name('imagem_turistica.opcoes');
        Route::put('/imagem_turistica_opcoes', 'edit')->name('imagem_turistica.opcoes');
        Route::delete('/imagem_turistica_opcoes', 'delete')->name('imagem_turistica.opcoes');
    });

    // imagem_cidade.opcoes
    Route::controller(ImagemCidadeController::class)->group(function () {
        Route::post('/imagem_cidade_opcoes', 'create')->name('imagem_cidade.opcoes');
        Route::put('/imagem_cidade_opcoes', 'edit')->name('imagem_cidade.opcoes');
        Route::delete('/imagem_cidade_opcoes', 'delete')->name('imagem_cidade.opcoes');
    });

    Route::controller(RoteiroController::class)->group(function () {
        Route::post('/roteiro_opcoes', 'create')->name('roteiro.opcoes');
        Route::put('/roteiro_opcoes', 'edit')->name('roteiro.opcoes');
        Route::delete('/roteiro_opcoes', 'delete')->name('roteiro.opcoes');
    });
});

require __DIR__ . '/auth.php';
