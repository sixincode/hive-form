<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class TabButton extends Component
{
    public $id;
    public $title;
    public $class;
    public $type;
    public $url;
    public $icon;
    public $iconClass;
    public $isActive;
    public $naming;
    public $buttonClass;
    public $activeClass;

    public function __construct(
      $id = null,
      $title = null,
      $class = null,
      $type = null,
      $url = null,
      $icon = null,
      $iconClass = null,
      $buttonClass = null,
      $activeClass = null,
      $naming = null,
      $isActive = false
    )
    {
      $this->id = Str::camel($title);
      $this->title = $title;
      $this->class = $class;
      $this->type = $type;
      $this->url = $url ;
      $this->icon = $icon ;
      $this->iconClass = $iconClass ;
      $this->buttonClass = $buttonClass ;
      $this->activeClass = $activeClass ;
      $this->naming = $naming ;
      $this->isActive = $isActive ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form::components.tab-button');
    }
}
