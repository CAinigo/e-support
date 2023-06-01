<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Users\BHW\BHWController;
use App\Http\Controllers\Users\Admin\AdminController;
use App\Http\Controllers\Users\Company\CompanyController;
use App\Http\Controllers\Users\Resident\ResidentController;
use App\Http\Controllers\Users\SubAdmin\SubAdminController;
use App\Http\Controllers\Users\ForApproval\ForApprovalController;

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
// Route::get('/register', [RegisterController::class, 'toRegister'])->name('toRegister');


// route for creating user
Route::post('/register', [RegisterController::class, 'create'])->name('register');

// route for redirecting register get method
Route::get('/register', function(){
    if(Auth::check()){
        return back();
    }else{
        return redirect()->route('welcome');
    }
});


// route for creating user
Route::post('/register-company', [RegisterController::class, 'createCompany'])->name('register.company');

// route for redirecting register get method
Route::get('/register-company', function(){
    if(Auth::check()){
        return back();
    }else{
        return redirect()->route('welcome');
    }
});


// route to validate inputed login credentials
Route::post('/login', [LoginController::class, 'login'])->name('login');

// route for redirecting login get method
Route::get('/login', function(){
    if(Auth::check()){
        return back();
    }else{
        return redirect()->route('welcome');
    }
});

// route for logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// route for redirecting logout get method
Route::get('/logout', function(){
    if(Auth::check()){
        return back();
    }else{
        return redirect()->route('welcome');
    }
});


// Admin Routes
Route::middleware('admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('/admin/{data}', function($data){
    //     echo "This is " . $data;
    // })->name('dashboard');
    Route::get('/admin/barangay-officials', [AdminController::class, 'officials'])->name('officials');
    Route::get('/admin/get-officials', [AdminController::class, 'getOfficials'])->name('get-officials');
    Route::get('/admin/residents', [AdminController::class, 'residents'])->name('residents');
    Route::get('/admin/business-establishments', [AdminController::class, 'establishments'])->name('establishments');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('users');
    Route::get('/admin/user-approval', [AdminController::class, 'approval'])->name('approval');
    Route::get('/admin/message', [AdminController::class, 'message'])->name('message');
    Route::get('/admin/accounts', [AdminController::class, 'accounts'])->name('accounts');
    Route::get('/admin/archive', [AdminController::class, 'archive'])->name('archive');
    Route::post('/admin/add-officials', [AdminController::class, 'addOfficials'])->name('add-officials');
    Route::put('/admin/edit-officials', [AdminController::class, 'editOfficials'])->name('edit-officials');
    Route::delete('/admin/delete-officials', [AdminController::class, 'deleteOfficials'])->name('delete-officials');
    Route::get('/admin/view-officials/{id}', [AdminController::class, 'viewOfficials'])->name('view-officials');
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