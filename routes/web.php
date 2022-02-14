<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Event;

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



//Routes in index
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/carousel', [App\Http\Controllers\HomeController::class, 'index'])->name('carousel');

//Login and register routes
Route::get('/login', [App\Http\Controllers\IndexController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\IndexController::class, 'index'])->name('register');

//Route home (The user's profile)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes in admin (CRUD)
Route::resource('admin', 'App\Http\Controllers\EventController')->middleware('auth');

//Authentication
Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// landingpage - No auth - create controller / -Terminado-
// access to dashboard - auth /

// Normal User - auth /
//list my events / -Terminado-
// unsuscribe /

//Admin User - auth
// list events / -Terminado-
// store / -Terminado-
// delete / -Terminado-
// edit / -Terminado-
// create / -Terminado-
// update / -Terminado-