<?php

namespace Sixincode\HiveForm\Components\Owners;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateOwnerElement;

class Owner extends TemplateOwnerElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.ownersSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultOwner');
    }
}
