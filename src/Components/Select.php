<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $options = [];
    public function __construct(
      $options = '',
    ){
      $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form:components.select');
    }
}
