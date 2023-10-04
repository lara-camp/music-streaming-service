<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;

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

Route::prefix('{locale?}')->where(['locale' => 'en|my'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('User/Page/Top', [
            'locale' => app()->getLocale(),
            'messages' => trans('messages'),
        ]);
    })->name('top');

    Route::get('/library', function () {
        return Inertia::render('User/Page/library');
    })->name('library');

    Route::get('/liked', function () {
        return Inertia::render('User/Page/liked');
    })->name('liked');

    Route::get('/album/detail', function () {
        return Inertia::render('User/Page/albumDetail');
    })->name('albumDetail');

    Route::get('/login', function () {
        $type = request()->query('type');
        return Inertia::render('User/Page/login', ['type' => $type]);
    })->name('login');

    Route::get('/search', function () {
        return Inertia::render('User/Page/search');
    })->name('search');

    Route::get('/aboutus', function () {
        return Inertia::render('User/Page/AboutUs');
    })->name('aboutus');

    Route::get('/contactus', [ContactUsController::class, 'form'])->name('contactus.form');
    Route::post('/contactus', [ContactUsController::class, 'Sendmail'])->name('contactus.send');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/forgotpsw', [UserController::class, 'forgotPsw'])->name('user.forgotpsw');
