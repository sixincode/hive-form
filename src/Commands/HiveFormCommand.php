<?php

namespace Sixincode\HiveForm\Commands;

use Illuminate\Console\Command;

class HiveFormCommand extends Command
{
    public $signature = 'hive-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
