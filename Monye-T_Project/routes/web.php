<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginregister', [UserController::class, 'index'])->name('loginregister')->middleware('guest');
Route::post('/loginregister/login', [UserController::class, 'login']);
Route::post('/loginregister/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/loginregister/register/katapemulihan', function (){return view('katapemulihan');})->name('katapemulihan')->middleware('auth');    
Route::put('/loginregister/register/katapemulihan/{id}', [UserController::class, 'katapemulihan'])->name('tes');

Route::get('/lupasandi', function (){ return view('lupasandi');});
Route::get('/dashboard', function(){ return view('dashboard');})->middleware('auth');