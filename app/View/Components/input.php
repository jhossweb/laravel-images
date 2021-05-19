<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    /* Nombre del campo */
    public $name;

    /* Tipo de Campo */
    public $type;

    /* Etiqueta */
    private $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $type = "text", string $label = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }

    public function label()
    {
        if ($this->label != null) {
            return ucfirst($this->label);
        }
        return ucfirst($this->name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
