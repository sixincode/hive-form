<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name;
    public $class;
    public $type;
    public $label;
    public $description;
    public $helper;
    public $error_mesage;
    public $selected_value;
    public $is_required;

    public function __construct(
      $name = null,
      $label = null,
      $helper = null,
      $description = null,
      $error_mesage = null,
      $selected_value = null,
      $class = null,
      $type = null
    )
    {
      $this->name = $name;
      $this->class = $class;
      $this->helper = $helper ;
      $this->type = $type;
      $this->label = $label ;
      $this->description = $description ;
      $this->error_mesage = $error_mesage ;
      $this->selected_value = $selected_value ;
      $this->is_required = $is_required ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form:components.checkbox');
    }
}
