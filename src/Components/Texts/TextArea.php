<?php

namespace Sixincode\HiveForm\Components\Texts;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateTextAreaElement;

class TextArea extends TemplateTextAreaElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.textAreasSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultTextArea');
  }
}
