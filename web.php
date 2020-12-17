<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/catagories', function () {
    return view('catagories');
 })->name('catagories');
 Route::middleware(['auth:sanctum', 'verified'])->get('/products', function () {
    return view('products');
 })->name('products');

Route::post('register', [UserController::class, 'index']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', [UserController::class, 'create' ])->name('users');    
    Route::get('data/edit/{id}', [UserController::class,'edit'])->name('users.edit');
    Route::post('data/update/{id}', [UserController::class,'update'])->name('users.update');
    Route::post('/products', [CategoryController::class,'index'])->name('catagories.products');




    Route::delete('/data/{id}', [UserController::class,'destroy'])->name('users.destroy');



});