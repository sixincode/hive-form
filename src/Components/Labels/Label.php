<?php

namespace Sixincode\HiveForm\Components\Labels;

use Sixincode\HiveForm\Components\Base\TemplateLabelElement;

class Label extends TemplateLabelElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.labelsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultLabel');
  }
}
