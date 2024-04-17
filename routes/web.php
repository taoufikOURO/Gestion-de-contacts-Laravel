<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('index');
Route::get('/contact/add',[App\Http\Controllers\ContactController::class,'add'])->name('add');
Route::post('/contact/add',[App\Http\Controllers\ContactController::class,'store'])->name('store');
Route::delete('/contact/{id}',[App\Http\Controllers\ContactController::class,'delete'])->name('delete');

Route::get('/contact/modifier',[App\Http\Controllers\ContactController::class,'preUpdate'])->name('preUpdate');

Route::post('/contact/modifier',[App\Http\Controllers\ContactController::class,'update'])->name('update');

