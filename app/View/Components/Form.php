<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{

    public $action;
    public $method;
    /** AAAA */
    public $enctype;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action = null, $method = null, $enctype = 'application/x-www-form-urlencoded')
    {
        $this->action = $action;
        $this->method = $method;
        $this->enctype = $enctype;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
