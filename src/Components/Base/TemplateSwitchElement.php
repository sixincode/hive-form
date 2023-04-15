<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

class TemplateSwitchElement extends Component
{
    use RenderingViewTrait;

    public $title;
    public $name;
    public $description;
    public $identification;
    public $color;
    public $text_color;
    public $model;
    public $is_disabled;
    public $toggleClass;
    public $is_required;
    public $icon;
    public $iconTwo;
    public $iconClass;
    public $value;
    public $class;
    public $span;
    public $size;

    public function __construct(
      $name,
      $identification = null,
      $title = null,
      $description = null,
      $color = null,
      $text_color = null,
      $model = false,
      $is_disabled = false,
      $toggleClass = null,
      $is_required = null,
      $source = null,
      $component = null,
      $base = null,
      $value = null,
      $icon = null,
      $iconTwo = null,
      $iconClass = null,
      $class = null,
      $size = 'regular',
      $span = null
    ){
      $this->title = $title;
      $this->name = $name;
      $this->description = $description;
      $this->identification = $identification;
      $this->color = $color;
      $this->text_color = $text_color;
      $this->model = $model ;
      $this->is_disabled = $is_disabled ;
      $this->toggleClass = $toggleClass ;
      $this->is_required = $is_required ;
      $this->source = $source;
      $this->component = $component ;
      $this->base = $base ;
      $this->value = $value ;
      $this->icon = $icon ;
      $this->iconTwo = $iconTwo ;
      $this->span = $span ;
      $this->iconClass = $iconClass ;
      $this->class = $class ;
      $this->size = $size ;

      if($this->is_disabled){
        $this->color = 'disabled';
      }

      $this->renderViewSettings();
      $this->setToggleColor($this->color);
      $this->setToggleSize($this->size);
    }

    public function setToggleSize($size = 'regular')
    {
      switch ($size){
          case 'tiny':
             $this->size = 'max-w-32';
             break;
          case 'small':
             $this->size = 'max-w-48';
             break;
          case 'regular':
             $this->size = 'max-w-64';
             break;
          case 'large':
             $this->size = 'max-w-80';
             break;
          case 'full':
             $this->size = 'w-full';
             break;
          default:
             $this->size = 'max-w-64';
             break;
          }
    }

    public function setToggleColor($color = 'blue')
    {
      switch ($color){
          case 'white':
             $this->color = 'bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 active:bg-slate-50';
             $this->text_color = 'text-slate-600 hover:text-slate-700';
             break;
          case 'black':
             $this->color = 'bg-gray-800 border border-transparent hover:bg-black active:bg-black';
             break;
          case 'green':
             $this->color = 'bg-green-600 border border-transparent hover:bg-green-700 active:bg-green-700';
             break;
          case 'red':
             $this->color = 'bg-red-600 border border-transparent hover:bg-red-700 active:bg-red-700';
             break;
          case 'blue':
             $this->color = 'bg-blue-600 border border-transparent hover:bg-blue-700 active:bg-blue-700';
             break;
          case 'emerald':
             $this->color = 'bg-emerald-600 border border-transparent hover:bg-emerald-700 active:bg-emerald-700';
             break;
          case 'transparent':
            $this->color = 'bg-transparent border border-transparent hover:bg-slate-50 active:bg-slate-50';
            break;
          case 'disabled':
            $this->color = 'border border-slate-200 bg-slate-100';
            $this->text_color = 'text-slate-400';
            break;
          default:
             $this->color = 'bg-blue-600 border border-transparent hover:bg-blue-700 active:bg-blue-700';
             break;
      }
   }

   public function setDefaultFramework()
   {
     return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
   }
}
