<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class TemplateButtonElement extends Component
{
    use RenderingViewTrait;

    public $title;
    public $name;
    public $identification;
    public $color;
    public $tag;
    public $has_spinner;
    public $text_color;
    public $button_type;
    public $is_disabled;
    public $buttonClass;
    public $is_required;
    public $icon;
    public $iconClass;
    public $state;
    public $class;
    public $span;
    public $size;
    public $url;
    public array $properties;

    public function __construct(
      $title = '',
      $name = null,
      $identification = null,
      $color = null,
      $tag = 'a',
      $text_color = null,
      $has_spinner = false,
      $button_type = null,
      $is_disabled = false,
      $buttonClass = null,
      $is_required = null,
      $source = null,
      $component = null,
      $base = null,
      $state = null,
      $icon = null,
      $iconClass = null,
      $class = null,
      $size = 'regular',
      $span = null,
      $url = null,
      $properties = []
    ){
      $this->title = $title;
      $this->name = $name;
      $this->color = $color;
      $this->tag = $tag ;
      $this->text_color = $text_color ;
      $this->has_spinner = $has_spinner ;
      $this->is_disabled = $is_disabled ;
      $this->buttonClass = $buttonClass ;
      $this->is_required = $is_required ;
      $this->source = $source;
      $this->component = $component ;
      $this->base = $base ;
      $this->state = $state ;
      $this->icon = $icon ;
      $this->span = $span ;
      $this->iconClass = $iconClass ;
      $this->class = $class ;
      $this->size = $size ;
      $this->identification = $identification ;
      $this->url = $url ;
      $this->properties = $properties ;

      if($this->tag != 'a' && $this->tag != 'button'){
        $this->tag = 'button';
      }

      if(!$this->name){
        $this->name = Str::slug($this->title,'_');
      }

      if(!$this->text_color){
        $this->text_color = 'text-white hover:text-gray-100';
      }


      if(in_array($this->button_type, ['button','submit','text/html'])){
        $this->button_type = $button_type ;
      }elseif(is_null($this->button_type)) {
        if($this->tag == 'a'){
          $this->button_type = 'text/html';
        }else{
          $this->button_type = 'button';
        }
      }else{
        $this->button_type = 'button';
      }

      if($this->is_disabled){
        $this->color = 'disabled';
      }

      $this->setButtonColor($this->color);
      $this->setButtonSize($this->size);
      $this->renderViewSettings();

    }

    public function setButtonSize($size = 'regular')
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

    public function setButtonColor($color = 'blue')
    {
      switch ($color){
          case 'white':
             $this->color = 'bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 active:bg-slate-50';
             $this->text_color = 'text-slate-600 hover:text-slate-700';
             break;
          case 'black':
             $this->color = 'bg-gray-800 border border-transparent hover:bg-black active:bg-black';
             break;
          case 'slate':
            $this->color = 'bg-slate-100 border border-transparent hover:bg-slate-200 active:bg-slate-200';
            $this->text_color = 'text-slate-700';
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
            $this->text_color = 'text-slate-700';
            break;
          case 'disabled':
            $this->color = 'border border-slate-200 bg-slate-100';
            $this->text_color = 'text-slate-400';
            break;
          case 'simple':
            $this->color = 'border border-slate-100  focus:border-blue-300 shadow-sm hover:bg-slate-50 active:bg-slate-200';
            $this->text_color = 'text-slate-500 hover:text-slate-700';
            break;
          default:
             $this->color = 'bg-blue-600 border border-transparent hover:bg-blue-700 active:bg-blue-700';
             break;
           }
      }

}
