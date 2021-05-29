<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ClientController;

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

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'login_admin'])->name('admin.login');
// Route::get('/admin/register', [AdminController::class, 'create_admin'])->name('admin.login');

// Vendor Routes
Route::get('/vendor/login', [VendorController::class, 'login_vendor'])->name('vendor.login');
Route::post('/vendor/register', [VendorController::class, 'create_vendor'])->name('vendor.register');

// Client Routes
Route::get('/client/login', [ClientController::class, 'login_client'])->name('client.login');
Route::get('/client/register', [ClientController::class, 'create_client'])->name('client.login');
