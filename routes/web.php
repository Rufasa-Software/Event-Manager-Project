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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::resource('admin', 'App\Http\Controllers\EventController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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