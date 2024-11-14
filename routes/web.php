<?php

use App\Http\Controllers\BlogController;
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

Route::get('/blogs',[BlogController::class ,'index'])->name('blogs.index');
Route::get('/blogs/create',[BlogController::class ,'create'])->name('blogs.create');
Route::post('/blogs',[BlogController::class ,'store'])->name('blogs.store');
Route::get('/blogs/{id}/edit',[BlogController::class ,'edit'])->name('blogs.edit');
Route::patch('/blogs/{id}',[BlogController::class ,'update'])->name('blogs.update');
Route::delete('/blogs/{id}',[BlogController::class ,'delete'])->name('blogs.delete');



Route::get('/', function () {
    return view('welcome');
});
