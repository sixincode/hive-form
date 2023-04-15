<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $identification;
    public $name;
    public $class;
    public $type;
    public $width;

    public function __construct(
      $identification = null,
      $name = null,
      $class = null,
      $width = null,
      $type = null
    )
    {
      $this->identification = $identification;
      $this->name = $name;
      $this->class = $class;
      $this->width = $width;
      $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.modal');
    }
}
