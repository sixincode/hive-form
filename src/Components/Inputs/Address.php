<?php

namespace Sixincode\HiveForm\Components\Inputs;

use Illuminate\View\Component;
use Sixincode\HiveForm\Components\Base\TemplateAddressElement;

class Address extends TemplateAddressElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-form.defaultViews.addressesSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-form.defaultViews.defaultAddress');
    }
}
