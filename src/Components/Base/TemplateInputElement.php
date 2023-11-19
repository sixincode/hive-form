<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateInputElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $label;
    public $description;
    public $placeholder;
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
    public $rounded;
    public $text_size;

    public function __construct(
      $name,
      $identification = null,
      $label = null,
      $helper = null,
      $description = null,
      $placeholder = null,
      $error_mesage = null,
      $selected_value = null,
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
      $width = null,
      $rounded = null,
      $text_size = null,
      $span = null
    ){
      $this->name = $name;
      $this->label = $label ;
      $this->helper = $helper ;
      $this->description = $description ;
      $this->placeholder = $placeholder ;
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
      $this->rounded = $rounded ;
      $this->text_size = $text_size ;
      $this->identification = $identification ;

      $this->renderViewSettings();
      $this->setTextSize($this->text_size);
      $this->setRadius($this->rounded);
    }

    public function setTextSize($size = 'sm')
    {
      switch ($size){
          case 'xs':
             $this->text_size = 'text-xs';
             break;
          case 'sm':
             $this->text_size = 'text-sm';
             break;
          case 'md':
             $this->text_size = 'text-md';
             break;
          case 'lg':
             $this->text_size = 'text-lg';
             break;
          case 'xl':
             $this->text_size = 'text-xl';
             break;
          case '2xl':
             $this->text_size = 'text-2xl';
             break;
          default:
             $this->text_size = '';
             break;
        }
    }

    public function setRadius($size)
    {
      switch ($size){
          case 'xs':
             $this->rounded = 'rounded-xs';
             break;
          case 'sm':
             $this->rounded = 'rounded-sm';
             break;
          case 'md':
             $this->rounded = 'rounded-md';
             break;
          case 'lg':
             $this->rounded = 'rounded-lg';
             break;
          case 'xl':
             $this->rounded = 'rounded-xl';
             break;
          case '2xl':
             $this->rounded = 'rounded-2xl';
             break;
          case 'full':
             $this->rounded = 'rounded-full';
             break;
          default:
             $this->rounded = 'rounded-md';
             break;
        }
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
    }

}
