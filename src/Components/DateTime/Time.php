<?php

namespace Sixincode\HiveForm\Components\DateTime;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateTimeElement;

class Time extends TemplateTimeElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.timesSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultTime');
  }
}
