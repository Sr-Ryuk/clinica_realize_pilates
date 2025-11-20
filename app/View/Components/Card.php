<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $value;
    public string $color;
    public string $colorClass;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $title,
        $value,
        string $color = 'primary'
    ) {
        $this->title = $title;
        $this->value = $value;
        $this->color = $color;
        $this->colorClass = 'text-' . $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.card');
    }
}
