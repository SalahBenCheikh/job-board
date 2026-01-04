<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/job',[JobController::class,'index']);


Route::get("Test/test", [TestController::class,"test"]);