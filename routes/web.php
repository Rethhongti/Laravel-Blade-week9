<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about',[App\Http\Controllers\PageController::class,'aboutPage']);
Route::get('/team',[App\Http\Controllers\PageController::class,'teamPage']);
Route::get('/testimonials',[App\Http\Controllers\PageController::class,'testimonial']);

Route::get('/services',[App\Http\Controllers\PageController::class,'servicePage']);
Route::get('/portfolio',[App\Http\Controllers\PageController::class,'portfolioPage']);
Route::get('/pricing',[App\Http\Controllers\PageController::class,'pricingPage']);
Route::get('/blog',[App\Http\Controllers\PageController::class,'blogPage']);
Route::get('/contact',[App\Http\Controllers\PageController::class,'contactPage']);

Route::get('/blog-single',[App\Http\Controllers\PageController::class,'blogSinglePage']);
Route::get('/portfolio-details',[App\Http\Controllers\PageController::class,'portfolioDetailPage']);