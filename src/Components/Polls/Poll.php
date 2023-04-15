<?php

namespace Sixincode\HiveForm\Components\Polls;

use Sixincode\HiveForm\Components\Base\TemplatePollElement;

class Poll extends TemplatePollElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-form.defaultViews.pollsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-form.defaultViews.defaultPoll');
  }
}
