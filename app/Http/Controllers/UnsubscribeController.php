<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnsubscribeController extends Controller
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

    public function unsubscribe(Request $request){

    $event_id = $request->route('id');
        
    $user = Auth::user();

    if ($user->events()->where('event_id', $event_id)->exists()) {
        $user->events()->detach($event_id);
        return redirect('/home');
    } else {
        return redirect('/home');
    }
}
}
