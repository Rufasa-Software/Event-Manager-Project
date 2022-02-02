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

Route::get('/', function () {
    $events = Event::All();
    return view('events.index')->with('events',$events);
});

Route::get('/login', function () {
    return view('events.login');
});

Route::get('/register', function () {
    return view('events.register');
});

Route::get('/admin', function () {
    $events = Event::All();
    return view('events.admin')->with('events',$events);
});

Route::get('/admin/create', function () {
    return view('events.create');
});

Auth::routes();  

// Route::get('/',[, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('events', 'App\Http\Controllers\EventController')->middleware('auth');

// landingpage - No auth - create controller
// access to dashboard - auth

// Normal User - auth
//list my events
// unsuscribe

//Admin User - auth
// list events
// store
// delete
// edit
// create 
// update,
