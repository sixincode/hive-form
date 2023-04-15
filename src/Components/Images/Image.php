<?php

namespace Sixincode\HiveForm\Components\Images;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateImageElement;

class Image extends TemplateImageElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.imagesSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultImage');
    }
}
