<?php

namespace Sixincode\HiveForm\Components\Inputs;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateInputNumberElement;

class Number extends TemplateInputNumberElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.inputNumbersSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultInputNumber');
    }
}
