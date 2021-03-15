<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::apiResource('/shares',ShareController::class);
Route::POST('/register',[RegisterController::class,'store']);
Route::POST('/login',[LoginController::class,'collation']);
Route::POST('/logout',[LogoutController::class,'out']);
Route::GET('/user',[UserController::class,'index']);
Route::PUT('/user',[UserController::class,'update']);


