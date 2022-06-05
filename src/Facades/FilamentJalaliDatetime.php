<?php

namespace Ariaieboy\FilamentJalaliDatetime\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ariaieboy\FilamentJalaliDatetime\FilamentJalaliDatetime
 */
class FilamentJalaliDatetime extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-jalali-datetime';
    }
}
