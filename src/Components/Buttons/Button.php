<?php

namespace Sixincode\HiveForm\Components\Buttons;

use Sixincode\HiveForm\Components\Base\TemplateButtonElement;

class Button extends TemplateButtonElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.buttonsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultButton');
  }
}
