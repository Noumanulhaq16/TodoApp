<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Notifiable;

use Illuminate\Support\Facades\Route;
// use App\Events\MyEvent;




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
Route::get('/', [UserAuth::class, 'login'])->name('/');
Route::post('/login_process', [UserAuth::class, 'login_process'])->name('login_process');


// notification

// Route::get('/event',function(){

//     event(new MyEvent('This is first message'));
// });

// Route::get('/listen',function(){

//     return view('pages.listen');
// });

Route::get('/notification',[Notifiable::class,'notify']);


Route::group(['middleware' => ['auth']], function () {

// Dashboard
Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');

// Showaddtastpage

Route::get('/showAddTask',[Dashboard::class,'showAddTask'])->name('showAddTask');

//Logout
Route::get('/logout', [UserAuth::class, 'logout'])->name('logout');

// addTask

Route::post('/addTask',[TaskController::class,  'addTask'])->name('addTask');

// update Task

Route::get('/edit/{id}',[TaskController::class,'edit'])->name('edit');

Route::post('/edit-attempt',[TaskController::class,'updateTask'])->name('edit-attempt');

Route::get('/delete-task/{id}',[TaskController::class,'taskDelete'])->name('delete-task');

// add Category

Route::get('/showcategory',[CategoryController::class,'showCategoryPage'])->name('showcategory');

Route::post('/addcategory',[CategoryController::class,'category_process'])->name('addcategory');

});
