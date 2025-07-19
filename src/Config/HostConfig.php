<?php

namespace SteveCreekmore\Remote\Config;

class HostConfig
{
    public function __construct(
        public string $host,
        public int $port,
        public string $user,
        public string $path,
        public ?string $privateKeyPath = null,
        public ?string $phpPath = 'php',
    ) {}
}
