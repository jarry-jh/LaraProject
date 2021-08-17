<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserLoginController;

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

// Admin Login Routes...
Route::get("/login",[LoginController::class, 'fromview'])->name('admin.login.from');
Route::get("/sign",[LoginController::class, 'signfromview'])->name('admin.signup.from');
Route::post("/register",[LoginController::class,'registerUser'])->name('admin.register');
Route::post("/login",[LoginController::class,'login'])->name('admin.login.check');
Route::any("/logout",[LoginController::class,'userlogout'])->name('admin.logout');

//Admin Routes... 
Route::get("/home",[HomeController::class, 'index'])->name('admin.dashboard');


// User Routes...
route::get('/signup',[UserLoginController::class,'signupfrm'])->name('user.signup.from');
Route::post('/signupcheck',[UserLoginController::class,'insertsignupdata'])->name('user.signup.insert');
Route::get('/ulogin',[UserLoginController::class,'loginfrom'])->name('user.loin.from');
Route::post('/logincheck',[UserLoginController::class,'logincheck'])->name('user.login.check');
Route::any('/ulogout',[UserLoginController::class,'logout'])->name('user.logout');
//Admin Routes... 
Route::get("/uhome",[UserHomeController::class, 'index'])->name('user.dashboard');