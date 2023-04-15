<?php

namespace Sixincode\HiveForm\Components\Labels;

use Sixincode\HiveForm\Components\Base\TemplateLabelElement;

class Helper extends TemplateLabelElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.helpersSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultHelper');
  }
}
