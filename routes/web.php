<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactUsFormController;
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

Route::get('/', [ CourseController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [ CourseController::class, 'show'])->name('detail');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::get('/register', [CustomAuthController::class, 'customRegistration']);
Route::get('/login', [CustomAuthController::class, 'customLogin']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');