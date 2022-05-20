<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//Students- IMAGEN  CRUD
Route::get('students',[StudentController::class, 'index']);
Route::get('add-student',[StudentController::class,'create']);
Route::post('add-student',[StudentController::class,'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);

Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
