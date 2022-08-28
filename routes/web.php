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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# contact
Route::get('/contact/show', [App\Http\Controllers\ContactsController::class, 'show'])->name('contact.show');
Route::get('/contact/create', [App\Http\Controllers\ContactsController::class, 'create'])->name('contact.create');
Route::post('/contact/save', [App\Http\Controllers\ContactsController::class, 'save'])->name('contact.save');
