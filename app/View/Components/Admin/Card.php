<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Card extends Component
{
    public string $title;
    public string $value;
    public string $color;
    public string $colorClass;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title,
        string $value,
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
        return view('admin.components.card');
    }
}
