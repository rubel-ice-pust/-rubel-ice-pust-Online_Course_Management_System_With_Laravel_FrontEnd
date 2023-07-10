<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;






Route::get('/',[HomeController::class,'HomeIndex']);
Route::post('/contactSend',[HomeController::class,'ContactSend']);




Route::get('/Projects',[ProjectsController::class,'ProjectsPage']);
Route::get('/Courses',[CoursesController::class,'CoursePage']);
Route::get('/Policy',[PolicyController::class,'PolicyPage']);
Route::get('/Terms',[TermsController::class,'TermsPage']);
Route::get('/Contact',[ContactController::class,'ContactPage']);