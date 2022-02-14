<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\HomeController;

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
//Routes in index ~
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/carousel', [App\Http\Controllers\HomeController::class, 'index'])->name('carousel');

Route::get('/subscribe/{id}', [SubscribeController::class, 'subscribe'])->name('subscribe');

//Login and register routes ~
Route::get('/login', [App\Http\Controllers\IndexController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\IndexController::class, 'index'])->name('register');

//Route home (The user's profile) ~
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes in admin (CRUD) ~
Route::resource('admin', 'App\Http\Controllers\EventController')->middleware('auth')->names([
    'index' => 'admin',
    'create' => 'admin.create',
    'edit' => 'admin.edit'
]);

//Authentication ~
Auth::routes();

//Middleware ~
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// landingpage - No auth - create controller / -Terminado-
// access to dashboard - auth / -A medias-

// Normal User - auth / -A medias-
//list my events / -Terminado-
// unsuscribe /

//Admin User - auth / -A medias-
// list events / -Terminado-
// store / -Terminado-
// delete / -Terminado-
// edit / -Terminado-
// create / -Terminado-
// update / -Terminado-