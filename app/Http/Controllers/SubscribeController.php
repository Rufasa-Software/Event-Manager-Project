<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class SubscribeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Subscribe function, many to many relationship using attachment
    public function subscribe(Request $request)
    {   
        $event_id = $request->route('id');
        $user = Auth::user();
        // dd($user, $event_id);
        $user->events()->attach($event_id);

        return redirect('/');
    }
}
