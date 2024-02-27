<?php
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('pages.admin.index');
    })->name('admin.dashboard');

    Route::get('/admin/products', function () {
        return view('pages.admin.products.index');
    })->name('admin.products.index');
    
    Route::get('/admin/products/create', function () {
        return view('pages.admin.products.create');
    })->name('admin.products.create');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
