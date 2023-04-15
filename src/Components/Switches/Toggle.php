<?php

namespace Sixincode\HiveForm\Components\Switches;

use Sixincode\HiveForm\Components\Base\TemplateSwitchElement;

class Toggle extends TemplateSwitchElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.togglesSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultToggle');
  }
}
