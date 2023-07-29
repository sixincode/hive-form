<?php

namespace Sixincode\HiveForm\Components\Icons;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateIconElement;

class Icon extends TemplateIconElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.iconsSVGSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultSVGIcon');
  }

}
