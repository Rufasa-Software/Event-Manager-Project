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

    public function unsubscribe($event_id)
    {   
        $user=Auth::user();
        $user->events()->detach($event_id);

        return redirect('/home');
    }
}
