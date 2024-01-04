<?php

use App\Http\Controllers\API\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

date_default_timezone_set('Asia/Calcutta');

Route::group(['middleware' => 'auth:sanctum'], function () {
});

// GET API
Route::get('header', [ApiController::class, 'header']);
Route::get('footer', [ApiController::class, 'footer']);
Route::get('home', [ApiController::class, 'getHomeData']);
Route::get('about', [ApiController::class, 'about']);
Route::get('certification', [ApiController::class, 'certification']);
Route::get('assesment', [ApiController::class, 'assesment']);
Route::get('jobs', [ApiController::class, 'jobs']);
Route::get('blog', [ApiController::class, 'getBlogList']);
Route::get('blog-category', [ApiController::class, 'getBlogCategory']);

//POST API
Route::post('store-enroll-data', [ApiController::class, 'storeEnrollData']);
