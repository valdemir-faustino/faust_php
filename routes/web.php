<?php

use App\Http\Controllers\FaustController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FaustController::class,'index'])->name("index");
Route::get('/create', [FaustController::class,'create'])->name("create");
Route::post('/store', [FaustController::class,'store'])->name("store");
Route::get('/edit{id}', [FaustController::class,'edit'])->name("edit");
Route::put('/update{id}', [FaustController::class,'update'])->name("update");
Route::get('/show{id}', [FaustController::class,'show'])->name("show");
Route::delete('/destroy{id}', [FaustController::class,'destroy'])->name("destroy");