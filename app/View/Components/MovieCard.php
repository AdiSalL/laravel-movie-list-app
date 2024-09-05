<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $popularMovie;
    public $genres;
    /**
     * Create a new component instance.
     */
    public function __construct($popularMovie, $genres)
    {
        //
        $this->popularMovie = $popularMovie;
        $this->genres = $genres;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie-card');
    }
}
