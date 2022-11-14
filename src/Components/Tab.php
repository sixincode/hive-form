<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Tab extends Component
{
    public $id;
    public $name;
    public $active;
    public $class;
    public $type;
    public $description;
    public $icon;
    public $iconClass;
    public $naming;
    public $options;

    public function __construct(
      $id = null,
      $active = null,
      $name = null,
      $class = null,
      $type = null,
      $description = null,
      $icon = null,
      $iconClass = null,
      $naming = 'activeOption',
      $options = null
    )
    {
      $this->id = $id;
      $this->active = $active;
      $this->name = $name;
      $this->class = $class;
      $this->type = $type;
      $this->description = $description ;
      $this->icon = $icon ;
      $this->iconClass = $iconClass ;
      $this->naming = $naming;
      $this->options = $options ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.tab');
    }
}
