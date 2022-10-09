<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $description;
    public $helper;
    public $error_mesage;
    public $selected_value;
    public $is_disabled;
    public $inputClass;
    public $is_required;
    public $icon;
    public $iconClass;
    public $state;
    public $type;
    public $class;
    public $width;

    public function __construct(
      $name,
      $label = null,
      $helper = null,
      $description = null,
      $error_mesage = null,
      $selected_value = null,
      $is_disabled = null,
      $inputClass = null,
      $is_required = null,
      $type = null,
      $state = null,
      $icon = null,
      $iconClass = null,
      $class = null,
      $width = null
    ){
      $this->name = $name;
      $this->label = $label ;
      $this->helper = $helper ;
      $this->description = $description ;
      $this->error_mesage = $error_mesage ;
      $this->selected_value = $selected_value ;
      $this->is_disabled = $is_disabled ;
      $this->inputClass = $inputClass ;
      $this->is_required = $is_required ;
      $this->type = $type ;
      $this->state = $state ;
      $this->icon = $icon ;
      $this->iconClass = $iconClass ;
      $this->class = $class ;
      $this->width = $width ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.input');
    }
}
