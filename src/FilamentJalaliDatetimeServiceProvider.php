<?php

namespace Ariaieboy\FilamentJalaliDatetime;

use Spatie\LaravelPackageTools\Package;
use Filament\PluginServiceProvider;

class FilamentJalaliDatetimeServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-jalali-datetime')
            ->hasConfigFile();
    }
}
