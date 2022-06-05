<?php

namespace Ariaieboy\FilamentJalaliDatetime\Commands;

use Illuminate\Console\Command;

class FilamentJalaliDatetimeCommand extends Command
{
    public $signature = 'filament-jalali-datetime';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
