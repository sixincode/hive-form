<?php

namespace Sixincode\HiveForm\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $identifiant;
    public $name;
    public $class;
    public $type;
    public array $texts;
    public array $urls;
    public array $images;
    public array $properties;

    public function __construct(
      $identifiant = null,
      $name = null,
      $class = null,
      $type = null,
      $texts = [],
      $urls = [],
      $images = [],
      $properties = [],
    )
    {
      $this->identifiant = $identifiant;
      $this->name = $name;
      $this->texts = $texts;
      $this->urls = $urls;
      $this->images = $images;
      $this->class = $class;
      $this->type = $type;
      $this->properties = $properties;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-form:components.card');
    }
}
