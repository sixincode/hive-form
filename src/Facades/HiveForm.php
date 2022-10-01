<?php

namespace Sixincode\HiveForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\HiveForm\HiveForm
 */
class HiveForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\HiveForm\HiveForm::class;
    }
}
