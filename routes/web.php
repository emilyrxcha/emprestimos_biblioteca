<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PrincipalController::class, 'index'])->name('index');
Route::get('/perfil', [App\Http\Controllers\UsuarioController::class, 'index'])->name('users.index');
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'index'])->name('sobre.index');

Auth::routes();

Route::fallback(function () {
    return view('errors.404');
});
