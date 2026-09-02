<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('extra.test');
});
Route::get('/home', function () {
    return view('layouts.app');
});

// Route::get('/price', function () {
//     return view('pages.price');
// })->name('price');

Route::get('/price', [UserController::class, 'test'])->name('price');


Route::get('/plans', function () {
    return view('pages.compare-plan');
})->name('compare-plan');

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');
