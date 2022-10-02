<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Text extends Component
{
    public $name;
    public $label;
    public $description;
    public $is_required;
    public $error_mesage;
    public $state;
    public $class;
    public $helper;
    public $type;
    public $rows;

    public function __construct(
      $name = null,
      $label = null,
      $helper = null,
      $description = null,
      $is_required = null,
      $error_mesage = null,
      $state = null,
      $class = null,
      $type = null,
      $rows = null
    )
    {
      $this->name = $name;
      $this->label = $label ;
      $this->description = $description ;
      $this->helper = $helper ;
      $this->error_mesage = $error_mesage ;
      $this->class = $class;
      $this->type = $type;
      $this->state = $state ;
      $this->is_required = $is_required ;
      $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form:components.text');
    }
}
