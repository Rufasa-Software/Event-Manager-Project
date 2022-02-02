<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $events;
    public $event; 

    public function __construct($events, $event)
    {
        
        $this->events=$events;
        $this->event=$event;
   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-component');
    }
}
