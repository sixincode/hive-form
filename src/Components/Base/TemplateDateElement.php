<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateDateElement extends Component
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
    public $time;
    public $format;
    public $defaultDateFormat;
    public $defaultDate;

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
      $time = false,
      $format = null,
      $defaultDateFormat = null,
      $defaultDate = null,
      $span = null
    ){
      $this->name = $name;
      $this->identification = $identification ;
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
      $this->time = $time ;
      $this->defaultDateFormat = $defaultDateFormat ;
      $this->defaultDate = $defaultDate ;
      $this->span = $span ;

      $this->setDefaultDateFormat();
      $this->setDefaultDateFormat();
      $this->renderViewSettings();
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');

    }

    public function setDefaultDate()
    {
      if(! $this->defaultDate ){
        $this->defaultDate = date("Y-m-d h:i");
      }
    }

    public function setDefaultDateFormat()
    {
        if($this->time ){
          $this->defaultDateFormat = "F j, Y H:i";
        }else{
          $this->defaultDateFormat = "F j, Y";
        }
      // switch ($date){
      //     case true:
      //        $this->color = 'bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 active:bg-slate-50';
      //        $this->text_color = 'text-slate-600 hover:text-slate-700';
      //        break;
      //     case 'black':
      //        $this->color = 'bg-gray-800 border border-transparent hover:bg-black active:bg-black';
      //        break;
      //        break;
      //      default:
      //         $this->color = 'bg-blue-600 border border-transparent hover:bg-blue-700 active:bg-blue-700';
      //         break;
      //   }
    }

}
