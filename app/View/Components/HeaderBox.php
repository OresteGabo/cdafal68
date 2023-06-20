<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderBox extends Component
{
    //this box number will be used to identify which box with what class
    public $label;
    public $data;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$data)
    {
        $this->label=$label;
        $this->data=$data;

        //$this->$box_number=$box_number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-box');
    }
}
