<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class AccordionItem extends Component
{
    public $id;
    public $name;
    public $class;
    public $type;
    public $description;
    public $naming;
    public $icon;
    public $iconClass;
    public $headerClass;
    public $bodyClass;

    public function __construct(
      $id = null,
      $name = null,
      $class = null,
      $type = null,
      $description = null,
      $naming = 'activeOption',
      $icon = null,
      $iconClass = null,
      $headerClass = null,
      $bodyClass = null
    )
    {
      $this->id = $id;
      $this->name = $name;
      $this->class = $class;
      $this->type = $type;
      $this->description = $description ;
      $this->icon = $icon ;
      $this->iconClass = $iconClass ;
      $this->naming = $naming;
      $this->headerClass = $headerClass;
      $this->bodyClass = $bodyClass;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.accordion-item');
    }
}
