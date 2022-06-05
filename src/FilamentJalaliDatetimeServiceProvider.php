<?php

namespace Ariaieboy\FilamentJalaliDatetime;

use Ariaieboy\FilamentJalaliDatetime\Commands\FilamentJalaliDatetimeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJalaliDatetimeServiceProvider extends PackageServiceProvider
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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-jalali-datetime_table')
            ->hasCommand(FilamentJalaliDatetimeCommand::class);
    }
}
