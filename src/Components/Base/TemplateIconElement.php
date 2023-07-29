<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class TemplateIconElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $path;
    public $viewBox;
    public $fill;
    public $stroke;
    public $height;
    public $width;
    public $class;
    public $type;
    public $color;
    public $space;
    public $size;
    public $schema;

    public function __construct(
      $path,
      $name = null,
      $identification = null,
      $viewBox = null,
      $fill = null,
      $stroke = null,
      $height = 4,
      $width = 4,
      $iconWidth = 1,
      $class = null,
      $type = null,
      $source = null,
      $component = null,
      $color = null,
      $space = null,
      $size = null,
      $base = null
    ){
      $this->path = $path;
      $this->name = $name;
      $this->identification = $identification ;
      $this->schema = config("icon.{$this->path}.path");
      (!$viewBox)?($this->viewBox = config("icon.{$this->path}.viewBox") ):($this->viewBox = '0 0 24 24' );
      (!$fill)?($this->fill = 'none' ):($this->fill = 'currentColor');
      (!$size)?($this->size = '1.5'):($this->size = $size);
      $this->color  = $color;
      $this->stroke = $stroke ;
      $this->height = $height ;
      $this->width = $width ;
      $this->class = $class ;
      $this->type = $type;
      $this->space = $space;
      $this->source = $source;
      $this->component = $component;
      $this->base = $base;



      if(!$this->name){
        $this->name = Str::slug($this->path,'_');
      }

      if(!$stroke){
        $this->stroke = 'currentColor';
      };

      $this->renderViewSettings();
      $this->setIconColor($this->color);
      $this->setIconSpace($this->space);

    }

    public function setIconSpace($space = 'regular')
    {
      switch ($space){
          case 'tiny':
             $this->space = 'mr-0.5';
             break;
          case 'small':
             $this->space = 'mr-1';
             break;
          case 'regular':
             $this->space = 'mr-1.5';
             break;
          case 'large':
             $this->space = 'mr-2';
             break;
          case 'full':
             $this->space = 'mr-2.5';
             break;
          default:
             $this->space = 'mr-0';
             break;
          }
    }

    public function setIconColor($color = 'slate')
    {

    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.icons');
    }

}
