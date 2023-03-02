<?php

use App\Http\Controllers\companiesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmployeesController;
use App\Models\EmployeesModel;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MainController::class,'login'])->name('login');
Route::post('/login/psot',[MainController::class,'login_post'])->name('login_post');


Route::get('/companytable',[companiesController::class,'companytable'])->name('companytable');
Route::get('/company',[companiesController::class,'company'])->name('company');
Route::post('/company/post',[companiesController::class,'company_post'])->name('company_post');
Route::get('/delete{id}',[companiesController::class,'delete'])->name('delete');
Route::get('/update/{id}',[companiesController::class,'update'])->name('update');
Route::post('/update/post',[companiesController::class,'update_post'])->name('update_post');



Route::get('/employtable',[EmployeesController::class,'employtable'])->name('employtable');
Route::get('/employess',[EmployeesController::class,'employess'])->name('employess');
Route::post('/employess/post',[EmployeesController::class,'employess_post'])->name('employess_post');
Route::get('/empdelete/{id}',[EmployeesController::class,'empdelete'])->name('empdelete');
Route::get('/empupdate/{id}',[EmployeesController::class,'empupdate'])->name('empupdate');
Route::post('/employeupdate/post',[EmployeesController::class,'employeupdate_post'])->name('employeupdate_post');

