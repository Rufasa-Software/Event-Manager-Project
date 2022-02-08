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
        $events = Event::All();
        return view('index')->with('events',$events);
    }

}