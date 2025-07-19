<?php

namespace SteveCreekmore\Remote\Config;

use SteveCreekmore\Remote\Exceptions\CouldNotExecuteCommand;

class RemoteConfig
{
    public static function getHost(string $hostName): HostConfig
    {
        $configValues = config("remote.hosts") ?? [];
        $configValues = $configValues[$hostName] ?? null;

        if (is_null($configValues)) {
            throw CouldNotExecuteCommand::hostNotFoundInConfig($hostName);
        }

        foreach (['host', 'port', 'user', 'path'] as $configValue) {
            if (is_null($configValues[$configValue])) {
                throw CouldNotExecuteCommand::requiredConfigValueNotSet($hostName, $configValue);
            }
        }

        return new HostConfig(...$configValues);
    }
}
