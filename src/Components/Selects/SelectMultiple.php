<?php

namespace Sixincode\HiveForm\Components\Selects;

use Sixincode\HiveForm\Components\Base\TemplateSelectElement;

class SelectMultiple extends TemplateSelectElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.selectsMultiSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultSelectMulti');
  }
}
