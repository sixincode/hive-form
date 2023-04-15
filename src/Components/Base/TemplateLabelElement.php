<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateLabelElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $description;
    public $class;
    public $is_required;

    public function __construct(
      $name,
      $identification = null,
      $description = null,
      $class = null,
      $is_required = false
    ){
      $this->name = $name;
      $this->description = $description;
      $this->class = $class ;
      $this->is_required = $is_required ;
      $this->identification = $identification ;
      $this->renderViewSettings();
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
    }

}
