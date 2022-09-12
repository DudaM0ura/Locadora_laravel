<?php

use App\Http\Controllers\LocadoraController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[LocadoraController::class, 'index'])->name('index.locadora');
Route::get('/create',[LocadoraController::class, 'create'])->name('create.locadora');
Route::post('/index/create',[LocadoraController::class, 'store'])->name('store.locadora');
Route::get('index/edit{id}', [LocadoraController::class, 'edit'])->name('edit.locadora');
Route::put('index/edit{id}',[LocadoraController::class, 'update'])->name('update.locadora');
Route::delete('index/{id}',[LocadoraController::class, 'destroy'])->name('destroy.locadora');