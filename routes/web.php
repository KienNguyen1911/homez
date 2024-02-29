<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('pages.admin.index');
    })->name('admin.dashboard');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/get-districts/{id}', [ProductController::class, 'getDistricts'])->name('get-districts');
Route::get('/get-wards/{id}', [ProductController::class, 'getWards'])->name('get-wards');