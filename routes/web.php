<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
    return view('users.index', [
        'users'=> User::all()
    ]);
})->name('user.index');



Route::get("store", function () {
    return view('users.create', [
         'users'
        ]); 
})->name('user.create');

Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
