<?php

namespace Sixincode\HiveForm\Components\Checkboxes;

use Sixincode\HiveForm\Components\Base\TemplateSwitchElement;

class Checkbox extends TemplateSwitchElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.checkboxesSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultCheckbox');
  }
}
