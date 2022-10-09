<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Label extends Component
{
    public $name;
    public $class;
    public $type;

    public function __construct(
      $name = null,
      $class = null,
      $type = null
    )
    {
      $this->name = $name;
      $this->class = $class;
      $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.label');
    }
}
