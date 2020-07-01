<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $type;
    public $name;
    public $id;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'text', $name = null, $id = null, $placeholder = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
