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

Route::get('/', [IndexController::class, 'index']);

Route::get('/subscribe/{id}', [SubscribeController::class, 'subscribe'])->name('subscribe');

Route::resource('admin', 'App\Http\Controllers\EventController');

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

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