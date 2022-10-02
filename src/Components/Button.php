<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $name;
    public $class;
    public $type;
    public $description;
    public $icon;
    public $iconClass;
    public $width;
    public $is_disabled;

    public function __construct(
      $name = null,
      $description = null,
      $icon = null,
      $iconClass = null,
      $class = null,
      $is_disabled = null,
      $type = null,
      $width = null
    )
    {
      $this->name = $name;
      $this->description = $description ;
      $this->is_disabled = $is_disabled ;
      $this->icon = $icon ;
      $this->iconClass = $iconClass ;
      $this->class = $class;
      $this->type = $type;
      $this->width = $width ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form:components.button');
    }
}
