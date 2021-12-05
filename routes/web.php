<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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

Route::get('/', [RestoController::class, 'index'])->name('index');
Route::get('/list', [RestoController::class, 'list'])->name('resto.list');
Route::get('/add', [RestoController::class, 'showAddPage'])->name('resto.showAddPage');
Route::post('/add', [RestoController::class, 'add'])->name('resto.add');
Route::get('/edit/{id}', [RestoController::class, 'showEditPage'])->name('resto.showEditPage');
Route::post('/edit', [RestoController::class, 'edit'])->name('resto.edit');
Route::get('/delete/{id}', [RestoController::class, 'delete'])->name('resto.delete');
