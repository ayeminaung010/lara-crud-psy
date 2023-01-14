<?php

use App\Http\Controllers\EmployeeController;
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
    return view('employee.list');
});

Route::prefix('employee')->group(function () {
    Route::get('/createPage',[EmployeeController::class,'createPage'])->name('employee#createPage');
    Route::post('/create',[EmployeeController::class,'create'])->name('employee#create');
    Route::get('/list',[EmployeeController::class,'list'])->name('employee#list');
    Route::get('/editPage/{id}',[EmployeeController::class,'editPage'])->name('employee#editPage');
    Route::get('/update/{id}',[EmployeeController::class,'update'])->name('employee#update');
    Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('employee#delete');
});
