<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {   
        $actualDate =  date('Y-m-d');
        $events = Event::All();
        $nextEvents = $this->filtergetNextEvents($events);
        $pastEvents = $this->filtergetOLdEvents($events);
       
        return view('index', compact('nextEvents','pastEvents' ));
    }
    public function filtergetNextEvents($events){
        $actualDate =  date('Y-m-d');
        $events = Event::All()
                ->sortBy(['event_date', 'asc'])
                ->where('event->event_date','>=', $actualDate);
         return $events;
    }  
    
    public function filtergetOLdEvents($events){
        $actualDate =  date('Y-m-d');
        $events = Event::All()
            ->sortBy(['event_date', 'asc'])
            ->where('event->event_date','<', $actualDate);
        return $events;
   } 

    
 } 
    

