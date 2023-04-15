<?php

namespace Sixincode\HiveForm\Traits;
use Illuminate\Support\Str;

trait RenderingViewTrait
{
  public $base;
  public $cssFramework;
  public $source;
  public $component;

  public function useBootstrapCss()
  {
    $this->cssFramework =  config('hive-display.cssFrameworks.bootstrap');
  }

  public function useTailwindCss()
  {
    $this->cssFramework = config('hive-display.cssFrameworks.tailwind');
  }

  public function setCssFramework($framework = 'tailwind')
  {
    switch ($framework){
        case 'tailwind' || config('hive-display.cssFrameworks.tailwind'):
           $this->useTailwindCss();
           break;
        case 'bootstrap' || config('hive-display.cssFrameworks.bootstrap'):
           $this->useBootstrapCss();
           break;
        default:
           $this->useTailwindCss();
           break;
      }
   }

   public function renderViewSettings()
   {
     if(!$this->source){
       $checkSource = method_exists($this,"setDefaultSource");
       if($checkSource){
         $this->setDefaultSource();
       }else{
         $this->source = $this->getBlankSource();
       }
     }

     if(!$this->component){
       $checkComponent = method_exists($this,"setDefaultComponent");
       if($checkComponent){
         $this->setDefaultComponent();
       }else{
         $this->component = $this->getBlankComponent();
       }
     }

     if(!$this->cssFramework){
       $checkFramework = method_exists($this,"setDefaultFramework");
       if($checkFramework){
         $this->setDefaultFramework();
       }else{
         $this->cssFramework = $this->getBlankFramework();
       }
     }

     if(!$this->base){
       $checkBase = method_exists($this,"setDefaultBase");
       if($checkBase){
         $this->setDefaultBase();
       }else{
         $this->base = $this->getBlankBase();
       }
     }


     if(! $this->identification){
        $this->identification = Str::snake($this->name) ?? rand(1,999);
      }

   }

   public function render()
   {
     return view($this->base.'.'.$this->cssFramework.'.'.$this->source.'.'.$this->component);
   }

   public function getBlankSource()
   {
     return config('hive-form.defaultViews.defaultSource');
   }

   public function getBlankComponent()
   {
     return config('hive-form.defaultViews.defaultComponent');
   }

   public function getBlankFramework()
   {
     return config('hive-display.cssFrameworks.tailwind');
   }

   public function getBlankBase()
   {
     return 'hive-form::components';
   }
}
