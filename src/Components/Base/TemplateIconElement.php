<?php

namespace Sixincode\HiveForm\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveForm\Traits\RenderingViewTrait;

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
      $viewBox = '0 0 24 24',
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
      $this->viewBox = $viewBox;
      $this->color  = $color;
      $this->fill   = $fill ;
      $this->stroke = $stroke ;
      $this->height = $height ;
      $this->width = $width ;
      $this->class = $class ;
      $this->type = $type;
      $this->space = $space;
      $this->source = $source;
      $this->component = $component;
      $this->base = $base;
      $this->size = $size;
      $this->schema = __DIR__.'\..\..\..\ressources\views\components\icons\.'.'icons\.'.$this->path;



      if(!$this->name){
        $this->name = str_slug($this->path);
      }

      if(!$stroke){
        $this->stroke = 'currentColor';
      };

      $this->renderViewSettings();
      $this->setIconColor($this->color);
      $this->setIconSize($this->size);
      $this->setIconSpace($this->space);

    }

    public function setIconSize($size = 'regular')
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
