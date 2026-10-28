<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/apropos', [PagesController::class, 'apropos']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/show/{id}', [PagesController::class, 'show'])->name('pages.show');

Route::get('/create', [ProductController::class, 'create'])->name('pages.create');
Route::post('/saveproduct', [ProductController::class, 'saveproduct']);
Route::delete('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
Route::put('/updateproduct/{id}', [ProductController::class, 'updateproduct']);
















    //     return view("pages.home");
    // });

// Route::get('/apropos', function () {
//     return view("pages.Apropos");
// });

// Route::get('/services', function () {
//     return view("pages.Services");
// });