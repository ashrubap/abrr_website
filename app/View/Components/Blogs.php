<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blogs extends Component
{
    public $img_url;
    /**
     * Create a new component instance.
     */
    public function __construct($img_url = "")
    {
        $this->img_url = $img_url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogs');
    }
}
