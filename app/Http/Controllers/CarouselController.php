<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * 
     */
    public function index()
    {
        $events = Event::all();
 
        $event = $events->find(1);
        
        return redirect('/', compact($event));
    }
}
