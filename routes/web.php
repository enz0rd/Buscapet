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

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/servicos', [ServiceController::class, 'index']);
Route::get('/empresas', [CompanyController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/dashboard', [DashController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/produtos/add', [ProductController::class, 'add']);
Route::get('/empresas/add', [CompanyController::class, 'add']);
Route::get('/servicos/add', [ServiceController::class, 'add']);
Route::get('/categorias/add', [CategoryController::class, 'add']);
