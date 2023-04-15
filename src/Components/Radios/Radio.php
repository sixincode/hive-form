<?php

namespace Sixincode\HiveForm\Components\Radios;

use Sixincode\HiveForm\Components\Base\TemplateRadioElement;

class Radio extends TemplateRadioElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.radiosSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultRadio');
  }
}
