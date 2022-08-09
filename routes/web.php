<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PropertyController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/', [HomeController::class, 'log'])->name('login');;
Route::group(['middleware' => 'auth'], function () {
    Route::get('/tentant', function () {
        return view('tentant');
    })->name('tentant');
    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contactus');

    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');
    Route::get('/feedback', function () {
        return view('feedback');
    });
    Route::get('/aboutus', function () {
        return view('aboutus');
    })->name('aboutus');
    Route::get('/dashboard', [PropertyController::class, 'indexvidash'])->name('dashboard');
    Route::get('/rentyourproperty', [CategoryController::class, 'index'])->name('rentyourproperty');
    Route::get('viewhouse/{id}', [PropertyController::class, 'indexviewhouse'])->name('viewhouse');
    Route::get('/viewhomeapartment', [PropertyController::class, 'indexview'])->name('viewhomeapartment');
    Route::get('/filter', [PropertyController::class, 'filter'])->name('filter');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/rentyourproperty', [PropertyController::class, 'store']);
    Route::post('/contactus', [ContactusController::class, 'store']);
});




require __DIR__ . '/auth.php';

//Admin
Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('admin/login', [AuthenticatedSessionController::class, 'store'])->name('admin.adminlogin');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('dashboard', [HomeController::class, 'usercount'])->name('admin.dashboard');
    Route::get('userinfo', [HomeController::class, 'user'])->name('admin.userinfo');
    Route::get('adminrentyourproperty', [PropertyController::class, 'index'])->name('admin.adminrentyourproperty');
    Route::get('contactus', [ContactusController::class, 'index'])->name('admin.contactus');
    Route::get('feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
    Route::put('update-rentyourproperty/{id}', [PropertyController::class, 'update'])->name('admin.update-rentyourproperty-check');
    Route::get('editrentyourproperty/{id}', [PropertyController::class, 'edit'])->name('admin.editrentyourproperty');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});
