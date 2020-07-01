<?php

namespace App\View\Components;

use Illuminate\View\Component;

use function PHPSTORM_META\type;

class Button extends Component
{

    public $type;
    public $style;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'submit', $style = 'primary', $content = null)
    {
        $this->type = $type;
        $this->style = $style;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
