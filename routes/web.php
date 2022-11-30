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
/*use App\Http\Controllers\CompanyController;*/
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/servicos', [ServiceController::class, 'index']);
/*Route::get('/empresas', [CompanyController::class, 'index']);*/
Route::get('/about', [AboutController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);

// Route::get('/produtos/{id}', [ProductController::class, 'id']);
// Route::get('/empresas/{id}', [CompanyController::class, 'id']);
// Route::get('/servicos/{id}', [ServiceController::class, 'id']);
