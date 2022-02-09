<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;


class carousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $carousel; 
    
     public function __construct()
    {
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $carousel = DB::select('select * from events');        ;
        return view('components.carousel', ['carousel' => $carousel]);
    }
}
