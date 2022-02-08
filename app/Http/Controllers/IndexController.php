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
        $nextEvents = $this->filtergetNextEvents($events, $actualDate);
        $pastEvents = $this->filtergetOLdEvents($events, $actualDate);
       
        return view('index', compact('nextEvents','pastEvents' ));
    }
    public function filtergetNextEvents($events, $actualDate){
        $nextEvent= $events->where('event_date', '>=' , $actualDate)->sortBy(['event_date', 'asc']);
        return $nextEvent;
    }  
    
    public function filtergetOLdEvents($events, $actualDate){
      $pastEvent=$events->where('event_date','<', $actualDate);
        return $pastEvent;
   } 

    
 } 
    

