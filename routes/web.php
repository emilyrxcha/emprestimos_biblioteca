<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\PrincipalController;


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

Route::get('/', [PrincipalController::class, 'index'])->name('index');
Route::get('/livro', [LivroController::class, 'index'])->name('livros.index');
