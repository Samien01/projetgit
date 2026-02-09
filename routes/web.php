<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,"index"]);

Route::get('/index', [IndexController::class,"index"]);

Route::get('/about', [AboutController::class,"about"]);

Route::get('/service', [ServiceController::class,"service"]);

Route::get('/project', [ProjectController::class,"project"]);

Route::get('/contact', [ContactController::class,"contact"]);

