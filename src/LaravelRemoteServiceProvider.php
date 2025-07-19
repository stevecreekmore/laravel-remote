<?php

namespace stevecreekmore\LaravelRemote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use stevecreekmore\LaravelRemote\Commands\LaravelRemoteCommand;

class LaravelRemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            ->hasCommand(LaravelRemoteCommand::class);
    }
}
