<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

//employee
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::match(['get','post'],'add_employee', [App\Http\Controllers\EmployeeController::class, 'add_employee'])->name('add_employee');
Route::match(['get','post'],'edit_employee/{id}', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('edit_employee');
Route::match(['get'],'delete_employee/{id}', [App\Http\Controllers\EmployeeController::class, 'delete_employee'])->name('delete_employee');
Route::match(['get','post'],'view_employee/{id}', [App\Http\Controllers\EmployeeController::class, 'view_employee'])->name('view_employee');
