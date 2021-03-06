<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category', function () {
    return view('welcame');
});

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);
Route::get('/update/{todo}', [TodoController::class, 'update']);
Route::post('/delete/{todo}', [TodoController::class, 'delete']);

Route::get('/delete/{todo}', [TodoController::class, 'show']);

Route::get('/search', [TodoController::class, 'search']);

Route::get('/verror', [TodoController::class, 'verror']);

Route::post('/update/{update}', [CategoryController::class, 'update']);
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'create']);

Route::post('/{category}/delete', [CategoryController::class, 'delete']);
Route::get('/test/{test}', [CategoryController::class, 'show']);
