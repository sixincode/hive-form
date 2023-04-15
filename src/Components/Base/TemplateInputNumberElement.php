<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateInputNumberElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $label;
    public $description;
    public $placeholder;
    public $helper;
    public $error_mesage;
    public $value;
    public $is_disabled;
    public $inputClass;
    public $is_required;
    public $icon;
    public $iconClass;
    public $state;
    public $class;
    public $span;
    public $width;
    public bool  $showButtons;
    public int   $min;
    public int   $max;

    public function __construct(
      $name,
      $identification = null,
      $label = null,
      $helper = null,
      $description = null,
      $placeholder = null,
      $error_mesage = null,
      $value = null,
      $is_disabled = null,
      $inputClass = null,
      $is_required = true,
      $source = null,
      $component = null,
      $base = null,
      $state = null,
      $icon = null,
      $iconClass = null,
      $class = null,
      $width = '16',
      $span = null,
      $showButtons = true,
      $min = 1,
      $max = 999
    ){
      $this->name = $name;
      $this->label = $label ;
      $this->helper = $helper ;
      $this->description = $description ;
      $this->placeholder = $placeholder ;
      $this->error_mesage = $error_mesage ;
      $this->value = $value ;
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
      $this->identification = $identification ;
      $this->showButtons = $showButtons ;
      $this->min = $min ;
      $this->max = $max ;

      $this->renderViewSettings();
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
    }

}
