<?php

namespace Sixincode\HiveForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sixincode\HiveForm\Commands\HiveFormCommand;
use Illuminate\Foundation\Console\AboutCommand;
// use Illuminate\Support\Facades\Blade;
// use Sixincode\HiveForm\Components\Button;
// use Sixincode\HiveForm\Components\Card;
// use Sixincode\HiveForm\Components\Checkbox;
// use Sixincode\HiveForm\Components\Dropdown;
// use Sixincode\HiveForm\Components\Helper;
// use Sixincode\HiveForm\Components\Icon;
// use Sixincode\HiveForm\Components\Input;
// use Sixincode\HiveForm\Components\Label;
// use Sixincode\HiveForm\Components\Modal;
// use Sixincode\HiveForm\Components\ModalConfirmation;
// use Sixincode\HiveForm\Components\Notification;
// use Sixincode\HiveForm\Components\Select;
// use Sixincode\HiveForm\Components\SelectMultiple;
// use Sixincode\HiveForm\Components\Text;
// use Sixincode\HiveForm\Components\Upload;

class HiveFormServiceProvider extends PackageServiceProvider
{
    // public function boot()
    // {
    //   Blade::componentNamespace('Nightshade\\Views\\Components', 'nightshade');
    // }


    public function configurePackage(Package $package): void
    {

        $package
            ->name('hive-form')
            ->hasConfigFile(['hive-form','hive-icon'])
            ->hasTranslations()
            ->hasAssets()
            ->hasViews('hive-form')
            ->hasViewComponents([
                'hive-form'
              ,[
                Button::class,
                Card::class,
                Checkbox::class,
                Dropdown::class,
                Helper::class,
                Icon::class,
                Input::class,
                Label::class,
                Modal::class,
                ModalConfirmation::class,
                Notification::class,
                Select::class,
                SelectMultiple::class,
                Text::class,
                Upload::class,
              ]
            ])
            ->hasMigration('create_hive-form_table')
            ->hasCommand(HiveFormCommand::class);
        AboutCommand::add('Sixin Code Alpha Elements for Laravel', fn () => ['Version' => '1.0.0']);

    }
}
