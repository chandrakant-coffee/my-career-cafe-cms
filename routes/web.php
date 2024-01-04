<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\JobSeekersController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\{
    DashboardController,
    UsersController,
    RolePermissionController,
    PermissionListingController,
    FooterController,
    HeaderController,
    AboutController,
    BlogCategoryController,
    TipsController,
    CertificationController,
    BlogController,
    EnrolldataController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|demo
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return view('clear');
});

require __DIR__ . '/auth.php';

Route::get('/', function () {
    dd('inn');
    return view('auth.login');
});

Route::get('/', [DashboardController::class, 'Dashboard'])->middleware('auth')->name('dashboard');

Route::middleware(['auth', 'permission'])->group(function () {
    Route::resource('users', UsersController::class);
    Route::get('Ajax/VerifyUser', [UsersController::class, 'VerifyUser'])->name('VerifyUser');
    Route::get('ChangeStatus/{id}', [UsersController::class, 'ChangeStatus'])->name('ChangeStatus');
    Route::resource('role-permission', RolePermissionController::class);
    Route::resource('permission-listing', PermissionListingController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('header', HeaderController::class);
    Route::resource('about', AboutController::class);
    Route::resource('certification', CertificationController::class);
    Route::resource('tips', TipsController::class);
    Route::resource('home', HomeController::class);
    Route::resource('assesment', AssesmentController::class);
    Route::resource('jobseekers', JobSeekersController::class);
    Route::resource('jobs', JobsController::class);
    // BLOGS ROUTE
    Route::resource('blogcategory', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('enroll', EnrolldataController::class);
});
