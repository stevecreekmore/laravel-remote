<?php

namespace stevecreekmore\LaravelRemote\Commands;

use Illuminate\Console\Command;
use Spatie\Ssh\Ssh;

class LaravelRemoteCommand extends Command
{
    public $signature = 'remote {myCommand}';

    public $description = 'Execute Commands on a remote server';

    public function handle()
    {
        ssh::create('user', 'example.com')
            ->onOutput(function ($type, $line) {
                echo $line;
            })->execute($this->getCommandToExecute());
    }

    private function getCommandToExecute(): string
    {
        return  $this->argument('myCommand');
    }
}
