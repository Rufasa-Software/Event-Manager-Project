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

    public function subscribe(Request $request)
    {   
        $event_id = $request->route('id');
        $user = Auth::user();

        if ($user->events($event_id)->count() == 0 ){
            $user->events()->attach($event_id);
            
        }else if($user->events($event_id)->count() != 0){
            $user->events()->detach($event_id);
        }
        return redirect('/');
    }
}
