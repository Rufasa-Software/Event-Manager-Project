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
    
    public $nextEvents;
    
     public function __construct($nextEvents)
    {
        $this->nextEvents = $nextEvents;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel');
    }
}
