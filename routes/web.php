<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

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
    return view('home');
});


Route::get   ('employee/list',      [EmployeeController::class, 'index'] )->name('employee.list');    /* */

Route::get   ('employee/show/{id}', [EmployeeController::class, 'show']  )->name('employee.show');    /* */
Route::get   ('employee/create',    [EmployeeController::class, 'create'])->name('employee.create');  /* */
Route::get   ('employee/edit/{id}', [EmployeeController::class, 'edit']  )->name('employee.edit');    /* */
Route::put   ('employee/store',     [EmployeeController::class, 'store'] )->name('employee.store');   /* */
Route::delete('employee/delete',    [EmployeeController::class, 'delete'])->name('employee.delete');  /* */

Route::get   ('job/list',           [JobController::class, 'index'] )->name('job.list');

Route::post  ('employee/search/job', [EmployeeController::class, 'searchJob'])->name('employee.search.job');

Route::get('login',  [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authLogin'])->name('auth.login');

Route::get('password', [AuthController::class, 'password'])->name('password');
Route::post('password', [AuthController::class, 'authPassword'])->name('auth.password');

Route::get('register',  [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'authRegister'])->name('auth.register');

Route::get('logout',  [AuthController::class, 'logout'])->name('logout');