<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class,'index']) ->name('users');
Route::get('add-user', [UserController::class,'create']) ->name('add-user');
Route::post('add-user', [UserController::class,'store']);
Route::get('edit-user/{id}', [UserController::class,'edit']) ->name('edit-user');
Route::put('update-user/{id}', [UserController::class,'update']) ->name('update-user');
Route::delete('delete-user/{id}', [UserController::class,'destroy']) ->name('delete-user');