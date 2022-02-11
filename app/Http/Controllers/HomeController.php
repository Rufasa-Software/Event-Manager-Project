<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
       
        $user=Auth::user();
        $id = $user->id;
        $events = $user->events;
        $sorted = $events->sortByDesc('event_date');
  
        $sorted->all();
    
              
        return view('home', compact('sorted'));
    }
    
    
       
    
}
