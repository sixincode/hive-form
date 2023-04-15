<?php

namespace Sixincode\HiveForm;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HiveForm\Commands\HiveFormCommand;
use Illuminate\Foundation\Console\AboutCommand;
use Sixincode\HiveForm\Components as Components;
use Sixincode\HiveForm\Components\Inputs\Text as Input;
use Sixincode\HiveForm\Components\Buttons\Button as Button;
use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;

class HiveFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-form')
            ->hasConfigFile(['hive-form','hive-form-components','hive-icon'])
            ->hasTranslations()
            ->hasAssets()
            ->hasViews('hive-form')
            ->hasViewComponents(
                'hive-form',
                // Components\Accordion::class,
                // Components\AccordionItem::class,
                // Components\Checkbox::class,
              //  Components\Datepicker::class,
                Components\Dropdown::class,
                // Components\Helper::class,
                // Components\Icon::class,
              //  Components\Label::class,
                Components\Modal::class,
                Components\ModalConfirmation::class,
                Components\Notification::class,
                // Components\Select::class,
                // Components\SelectMultiple::class,
              //  Components\Text::class,
                Components\Tab::class,
                Components\TabButton::class,
                Components\TabItem::class,
                Components\Upload::class,
            )
            ->hasMigration('create_hive-form_table')
            ->hasCommand(HiveFormCommand::class);
        AboutCommand::add('Sixin Code Alpha Elements for Laravel', fn () => ['Version' => '1.0.0']);
    }

    public function packageBooted()
    {
      $this->bootHiveFormBladeAndLivewireComponents();
    }

    public function bootHiveFormBladeAndLivewireComponents()
    {
      $prefix = config('hive-form-components.prefix', 'hive-form');
      foreach (config('hive-form-components.blade', []) as $alias => $component) {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Blade::component($alias, $component);
        }
      foreach (config('hive-form-components.livewire', []) as $alias => $component) {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Livewire::component($alias, $component);
        }
     }
}
