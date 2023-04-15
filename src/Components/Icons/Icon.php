<?php

namespace Sixincode\HiveForm\Components\Icons;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateIconElement;

class Icon extends TemplateIconElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.iconsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultIcon');
  }
    //
    //
    // /**
    //  * Get the view / contents that represent the component.
    //  *
    //  * @return \Illuminate\Contracts\View\View|\Closure|string
    //  */
    // public function render()
    // {
    //     return view('hive-form::components.icon');
    // }
}
