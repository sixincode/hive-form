<?php

namespace Sixincode\HiveForm\Components\Inputs;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateInputElement;

class Text extends TemplateInputElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.inputTextsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultInputText');
    }
}
