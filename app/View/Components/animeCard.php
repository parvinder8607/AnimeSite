<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class animeCard extends Component
{
    public $anime;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $myObject
     * @return void
     */
    public function __construct($anime)
    {
        $this->anime = $anime;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.anime-card');
    }
}
