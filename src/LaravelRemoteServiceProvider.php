<?php

namespace stevecreekmore\Remote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use stevecreekmore\Remote\Commands\RemoteCommand;

class LaravelRemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            ->hasCommand(RemoteCommand::class);
    }
}
