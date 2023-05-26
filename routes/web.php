<?php

use App\Http\Controllers\NoticiaController;
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

Route::get('/', [NoticiaController::class, 'index'])->name('site.noticias.listar');
Route::post('/', [NoticiaController::class, 'index'])->name('site.noticias.listar');

Route::get('/sobre-mim', [NoticiaController::class, 'sobreMim'])->name('site.sobre-mim');

// página principal e página de noticias

Route::get('/noticias/buscar', [NoticiaController::class, 'buscar'])->name('site.noticias.buscar');
// Route::post('/noticias/buscar', [NoticiaController::class, 'buscar'])->name('site.noticias.buscar');

Route::get('/noticias/adicionar', [NoticiaController::class, 'adicionar'])->name('site.noticias.adicionar');
Route::post('/noticias/adicionar', [NoticiaController::class, 'adicionar'])->name('site.noticias.adicionar');


Route::get('/noticias/exibir/{id}', [NoticiaController::class, 'exibir'])->name('site.noticias.exibir');
Route::get('/noticias/editar/{id}/{msg?}', [NoticiaController::class, 'editar'])->name('site.noticias.editar');
Route::get('/noticias/excluir/{id}/{msg?}', [NoticiaController::class, 'excluir'])->name('site.noticias.excluir');

// Rota de fallback
Route::fallback(function() { echo 'Rota inexistente.
    <a href="'.route('site.noticias.listar').'"> Retornar à Página principal. </a>' ;
});


