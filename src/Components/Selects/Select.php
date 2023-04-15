<?php

namespace Sixincode\HiveForm\Components\Selects;

use Sixincode\HiveForm\Components\Base\TemplateSelectElement;

class Select extends TemplateSelectElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.selectsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultSelect');
  }
}
