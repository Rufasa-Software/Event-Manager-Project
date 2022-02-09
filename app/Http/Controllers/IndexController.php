<?php

namespace App\Http\Controllers;

use App\Models\Event;


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
        $nextEvents = $this->filtergetNextEvents($events, $actualDate);
        $pastEvents = $this->filtergetOLdEvents($events, $actualDate);
       
        return view('index', compact('nextEvents','pastEvents' ));
    }
    public function filtergetNextEvents($events, $actualDate){
        $nextEvent = Event::where('event_date', '>=' , $actualDate)->paginate(6);
        return $nextEvent;
        //->sortBy(['event_date', 'asc'])
    }  
    
    public function filtergetOLdEvents($events, $actualDate){
      $pastEvent=Event::where('event_date','<', $actualDate)->paginate(6);
        return $pastEvent;
   } 
   
    
 } 
    

