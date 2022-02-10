<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use EventUser;
use Illuminate\Http\Request;

class EventUserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
 
        $user_id->events()->attach($event_id);
        return view('user')->with('user',$user);
    }
}