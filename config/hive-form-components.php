<?php

use Sixincode\HiveForm\Components as Components;
// use Sixincode\HiveForm\Components\Inputs\Text as Input;

return [
  /*
  |--------------------------------------------------------------------------
  | Blade Components
  |--------------------------------------------------------------------------
  | Below are listed all the blade components that should be loaded
  | by the packageBooted method on the package ServiceProder.
  */

  'blade' => [
    'address'   => Components\Inputs\Address::class,
    'input'     => Components\Inputs\Text::class,
    'number'    => Components\Inputs\Number::class,
    'email'     => Components\Inputs\Email::class,
    'password'  => Components\Inputs\Password::class,
    'phone'     => Components\Inputs\Phone::class,
    'text'      => Components\Texts\TextArea::class,

    'date'      => Components\DateTime\Date::class,
    'time'      => Components\DateTime\Time::class,

    'image'     => Components\Images\Image::class,

    'button'    => Components\Buttons\Button::class,
    'checkbox'  => Components\Checkboxes\Checkbox::class,
    'toggle'    => Components\Switches\Toggle::class,
    'icon'      => Components\Icons\Icon::class,
    'label'     => Components\Labels\Label::class,
    'helper'    => Components\Labels\Helper::class,
    'owner'     => Components\Owners\Owner::class,
    'poll'      => Components\Polls\Poll::class,
    'radio'     => Components\Radios\Radio::class,
    'select'    => Components\Selects\Select::class,
    'select-multiple'    => Components\Selects\SelectMultiple::class,
    'url'      => Components\Urls\Url::class,

    ],
  /*
  |--------------------------------------------------------------------------
  | Livewire Components
  |--------------------------------------------------------------------------
  | Below are listed all the Livewire components that should be loaded
  | by the bootingPackage method on the package ServiceProder.
  */
  'livewire' => [
   //
  ],

  /*
  |--------------------------------------------------------------------------
  | Components Prefix
  |--------------------------------------------------------------------------
  |
  | This value will set a prefix for all Shopper Admin components.
  | By default it's shopper. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | For example, it's reference components like:
  |
  | <x-hive-index />
  | <livewire:hive-index />
  |
  */
  'prefix' => 'hive-form',
];
