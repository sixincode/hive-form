<?php

namespace Sixincode\HiveForm\Components\Urls;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateUrlElement;

class Url extends TemplateUrlElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.urlsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultUrl');
    }
}
