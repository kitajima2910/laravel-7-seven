<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public $name;
    public $letters;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $letters)
    {
        $this->name = $name;
        $this->letters = $letters;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
