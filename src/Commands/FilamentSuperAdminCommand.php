<?php

namespace codearachnid\FilamentSuperAdmin\Commands;

use Illuminate\Console\Command;

class FilamentSuperAdminCommand extends Command
{
    public $signature = 'filament-super-admin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
