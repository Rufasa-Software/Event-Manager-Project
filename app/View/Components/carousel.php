<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Event;


class carousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $event; 
    
     public function __construct($event)
    {
    $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $event = Event::All();
        return view('components.carousel', compact('event'));
    }
}
