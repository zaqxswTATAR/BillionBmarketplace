<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index-detailed-register');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//หน้าแรกใช้ '/'
//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/user', [App\Http\Controllers\HomeController::class, 'userHome'])->name('user.home');
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/regis', function () {
    return view('auth.register');
})->name('regis');

Route::get('/dashboard', function () {
    return view('dashboard');
});
