<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\PreventBackHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Get Routes
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');


Route::middleware([Authenticate::class, PreventBackHistory::class])->group(function () {
    Route::get('/editaccount', [ProfileController::class, 'showAccountDetails'])
        ->name('account');
    Route::get('/userbooks', [BookController::class, 'getUserBooks'])
        ->name('userbooks');
    Route::get('/mybooks', [ProfileController::class, 'showMyBooksHeader',])
        ->name('mybooks');
    Route::get('/books/{id}', [BookController::class,'showDetailBook'])
        ->name('book.show');

});
//Post Routes
Route::post('/register', [UserController::class, 'register'])
    ->name('register');
Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');
Route::post(uri: '/login', action: [UserController::class, 'login'])
    ->name(name: 'login');
Route::post('/addbooks', [BookController::class, 'store'])
    ->name('addbooks');
Route::post('/update', [UserController::class, 'updateUserDetails'])
    ->name('updateUser');
