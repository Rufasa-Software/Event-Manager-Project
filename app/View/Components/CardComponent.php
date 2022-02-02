<?php

namespace App\View\Components;

use Illuminate\View\Component;


class CardComponent extends Component
{
    public $events;
    /* public $event_name;
    public $event_date;
    public $event_description;
    public $event_img;
    public $event_capacity; */

    /**
     * Create a new component instance.
     *
     
     */
    public function __construct($events)
    {
        $this->events=$events;
       
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