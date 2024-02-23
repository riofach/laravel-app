<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Template extends Component
{
    /**
     * Create a new component instance.
     */
    public $body, $title;
    public function __construct($body = "", $title = "Global")
    {
        $this->body = $body;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template');
    }
}
