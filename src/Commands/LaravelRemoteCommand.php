<?php

namespace stevecreekmore\LaravelRemote\Commands;

use Illuminate\Console\Command;
use Spatie\Ssh\Ssh;

class LaravelRemoteCommand extends Command
{
    public $signature = 'remote {command}';

    public $description = 'Execute Commands on a remote server';

    public function handle(): void
    {
        ssh::create('user', 'example.com')
            ->onOutput(function ($type, $line) {
                echo $line;
            })->execute($this->getCommandToExecute());
    }
    private function getCommandToExecute(): string
    {
        $command = $this->argument('command');

        if (empty($command)) {
            $this->error('No command provided.');
            return '';
        }

        return $command;
    }
}
