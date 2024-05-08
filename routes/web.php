<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Employee.create');
});


Route::get('/create',[EmployeeController::class,'create']);
Route::post('/create',[EmployeeController::class,'store']);
Route::get('/index',[EmployeeController::class,'index']);
Route::get('emp/{id}/edit',[EmployeeController::class,'edit']);
Route::post('emp/{id}/edit',[EmployeeController::class,'update']);
Route::get('emp/{id}/delete',[EmployeeController::class,'delete']);