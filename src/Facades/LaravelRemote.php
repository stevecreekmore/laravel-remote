<?php

namespace stevecreekmore\LaravelRemote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \stevecreekmore\LaravelRemote\LaravelRemote
 */
class LaravelRemote extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \stevecreekmore\LaravelRemote\LaravelRemote::class;
    }
}
