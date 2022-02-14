<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

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
        $actualDate =  date('Y-m-d');
        $event_id = $request->route('id');
        $event = Event::find($event_id);
        $event_date = $event->event_date;
        
        $user = Auth::user();

        if ($event_date < $actualDate) {
            return redirect('/')->with('message', ' Está intentando suscribirse a un evento caducado');
        
        }else {
            if($user->events()->where('event_id', $event_id)->exists()) {
                $user->events()->detach($event_id);
                return redirect('/home');
            
            }else {
                $user->events()->attach($event_id);
                return redirect('/');
            }
        }
    }
} 