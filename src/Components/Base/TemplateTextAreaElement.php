<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateTextAreaElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $label;
    public $description;
    public $helper;
    public $error_mesage;
    public $selected_value;
    public $is_disabled;
    public $inputClass;
    public $is_required;
    public $icon;
    public $iconClass;
    public $state;
    public $class;
    public $span;
    public $width;
    public $height;
    public $rows;

    public function __construct(
      $name,
      $identification = null,
      $label = null,
      $helper = null,
      $description = null,
      $error_mesage = null,
      $selected_value = null,
      $is_disabled = null,
      $inputClass = null,
      $is_required = null,
      $source = null,
      $component = null,
      $base = null,
      $state = null,
      $icon = null,
      $iconClass = null,
      $class = null,
      $width = null,
      $height = '160px',
      $span = null,
      $rows = null
    ){
      $this->name = $name;
      $this->identification = $identification ;
      $this->label = $label ;
      $this->helper = $helper ;
      $this->description = $description ;
      $this->error_mesage = $error_mesage ;
      $this->selected_value = $selected_value ;
      $this->is_disabled = $is_disabled ;
      $this->inputClass = $inputClass ;
      $this->is_required = $is_required ;
      $this->source = $source;
      $this->component = $component ;
      $this->base = $base ;
      $this->state = $state ;
      $this->icon = $icon ;
      $this->span = $span ;
      $this->iconClass = $iconClass ;
      $this->class = $class ;
      $this->width = $width ;
      $this->height = $height ;
      $this->rows = $rows;

      $this->renderViewSettings();
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
    }

}
