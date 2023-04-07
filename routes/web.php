<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UpdateController;
use App\Http\Middleware\Authenticate;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'], '/login', [AuthController::class, 'login'])->name('login');

Route::group([
    'middleware' => ['sentinel.permission:dashboard']
], function(){
    Route::get('/', [MainController::class, 'index'])->name('home.index');
    Route::get('/portofolio', [MainController::class, 'portofolio'])->name('portofolio');
    Route::get('/about-me', [MainController::class, 'aboutMe'])->name('about-me');
});


Route::group([
    'as' => "create.",
    'middleware' => ['sentinel.permission:create']
], function(){
    Route::match(['get','post'], '/new-project', [CreateController::class, 'newProject'])->name('project');
});

Route::group([
    'as' => "update.",
    'middleware' => ['sentinel.permission:update']
], function(){
    Route::post('/title', [UpdateController::class, 'mainTitle'])->name('main-title');
    Route::post('/visimisi', [UpdateController::class, 'profileDesc'])->name('profile-desc');
    Route::match(['get','post'], '/profile', [UpdateController::class, 'profile'])->name('profile');
    Route::match(['get','post'], '/sosmed', [UpdateController::class, 'sosmed'])->name('sosmed');
});

