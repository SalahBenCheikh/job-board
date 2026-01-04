<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,"index"]);
Route::get('/about',[IndexController::class,'about']);
Route::get('/contact',[IndexController::class,'contact']);
Route::get("Test/test", [TestController::class,"test"]);
Route::get("job/", [JobController::class,"index"]);
Route::get('/blog', [PostController::class,'index']);
Route::get('/blog/create', [PostController::class,'create']);
Route::get('/blog/{id}', [PostController::class,'show']);

