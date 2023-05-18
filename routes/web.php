<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Users\Admin\AdminController;
use App\Http\Controllers\Users\BHW\BHWController;
use App\Http\Controllers\Users\Company\CompanyController;
use App\Http\Controllers\Users\ForApproval\ForApprovalController;
use App\Http\Controllers\Users\Resident\ResidentController;
use App\Http\Controllers\Users\SubAdmin\SubAdminController;
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

// route for welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// route to register page
Route::get('/register', [RegisterController::class, 'toRegister'])->name('toRegister');

// route for creating user
Route::post('/create', [RegisterController::class, 'create'])->name('register');

// route to validate inputed login credentials
Route::post('/process', [LoginController::class, 'login'])->name('login');

// route for logout
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin');
});

// Sub-Admin Routes
Route::middleware('sub-admin')->group(function(){
    Route::get('/sub-admin/dashboard', [SubAdminController::class, 'dashboard'])->name('sub-admin');
});

// BHW Routes
Route::middleware('bhw')->group(function(){
    Route::get('/bhw/dashboard', [BHWController::class, 'dashboard'])->name('bhw');
});

// Resident Routes
Route::middleware('resident')->group(function(){
    Route::get('/resident/dashboard', [ResidentController::class, 'dashboard'])->name('resident');
});

// Company Routes
Route::middleware('company')->group(function(){
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company');
});

// For-Approval Routes
Route::middleware('for-approval')->group(function(){
    Route::get('/for-approval/dashboard', [ForApprovalController::class, 'dashboard'])->name('for-approval');
});