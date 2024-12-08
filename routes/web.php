<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\ReportController;

Route::get('/', [HomeController::class,'index']);
Route::get('/contact_us', [HomeController::class,'contact_us']);
Route::get('/about_us', [HomeController::class,'about_us']);

Route::get('/reports', [ReportController::class,'report_list']);
Route::get('/reports/{post}', [ReportController::class,'single_report']);
