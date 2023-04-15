<?php

namespace Sixincode\HiveForm\Components\DateTime;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateDateElement;

class Date extends TemplateDateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.datesSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultDate');
  }
}
