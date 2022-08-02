<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function () {

   Route::get('dashboard',[FrontendController::class,"index"]);
   Route::get('categories', [CategoryController::class,"index"]);
   Route::get('add-categories', [CategoryController::class,"add"]);
   Route::post('insert-categories', [CategoryController::class,"insert"]);
   Route::get('edit_cat/{id}',[CategoryController::class,'edit'])->name('edit.cat');
   Route::put('update_cat/{id}', [CategoryController::class, 'update']);
   Route::get('delete_cat/{id}',[CategoryController::class,'delete'])->name('delete.cat');
   });
