<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserAuth;
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


// Register
Route::get('/signup', [UserAuth::class, 'register'])->name('signup');
Route::post('/signup_process', [UserAuth::class, 'register_process'])->name('register_process');
// Login
Route::get('/login', [UserAuth::class, 'login'])->name('login');
Route::post('/login_process', [UserAuth::class, 'login_process'])->name('login_process');




Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');

//Logout
Route::get('/logout', [UserAuth::class, 'logout'])->name('logout');

});
