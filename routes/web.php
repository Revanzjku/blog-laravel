<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/article', [BlogController::class, 'article'])->name('blog.article');
Route::get('/about-us', [BlogController::class, 'about'])->name('blog.about');
Route::get('/contact-us', [BlogController::class, 'contact'])->name('blog.contact');
Route::post('/contact-us/store', [BlogController::class, 'contactMessage'])->name('blog.message');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');

