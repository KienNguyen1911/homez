<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/admin/dashboard', function () {
    return view('pages.admin.index');
});

Route::get('/admin/products', function () {
    return view('pages.admin.products.index');
});

Route::get('/admin/products/create', function () {
    return view('pages.admin.products.create');
});