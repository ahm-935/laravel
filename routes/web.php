<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RoleController;
use App\Models\Role;

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

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::get('/roles/details', [RoleController::class, 'details'])->name('roles.details');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::get('/users/details', [UsersController::class, 'details'])->name('users.details');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
=======
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.single-master');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Auth
Route::get('/login', function () {
    return view('admin.pages.auth.login');
});

>>>>>>> f5e64f3 (sparkAdmin templating on L13)
