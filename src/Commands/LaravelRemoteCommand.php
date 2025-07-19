<?php

namespace stevecreekmore\LaravelRemote\Commands;

use Illuminate\Console\Command;

class LaravelRemoteCommand extends Command
{
    public $signature = 'laravel-remote';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
