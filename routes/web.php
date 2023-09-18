<?php

use Inertia\Inertia;
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

Route::get('/', function () {
    return Inertia::render('Layout',[
        'name' => "YKM",
        'frameworks' => [
            "vuejs", "inertiaJs", "laravel"
        ]
    ]);
})->name('application');

Route::get('/user/home', function () {
    return Inertia::render('User/Home',[
        'name' => "YKM",
        'frameworks' => [
            "vuejs", "inertiaJs", "laravel"
        ],
    ]);
})->name('user.home');

Route::get('/admin/home', function () {
    return Inertia::render('Admin/Home',[
        'name' => "YKM",
        'frameworks' => [
            "vuejs", "inertiaJs", "laravel"
        ],
        'user' => "mgmg"
    ]);
})->name('admin.home');

Route::post('/logout', function () {
    return Inertia::render('Auth/Logout');
})->name('auth.logout');
