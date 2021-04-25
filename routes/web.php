<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
})->name('homepage');

Route::get('/order/create',[OrderController::class , 'create'])->name('order.create');
Route::post('/order/store',[OrderController::class , 'store'])->name('order.store');
Route::get('/order/index',[OrderController::class , 'index'])->name('order.index');
Route::get('/order/show/{order}',[OrderController::class , 'show'])->name('order.show');
Route::post('/order/fruits/{order}',[OrderController::class , 'fruits'])->name('order.fruits');
Route::get('/contatti',[OrderController::class , 'contatti'])->name('contatti');
Route::post('/contatti/submit',[OrderController::class , 'submit'])->name('contatti.submit');
Route::get('order/edit/{order}',[OrderController::class , 'edit'])->name('order.edit');
Route::post('/order/update/{order}',[OrderController::class , 'update'])->name('order.update');
Route::delete('/order/destroy/{order}',[OrderController::class , 'destroy'])->name('order.destroy');
Route::get('/location',[OrderController::class , 'location'])->name('location');