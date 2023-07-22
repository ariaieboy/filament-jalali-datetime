<?php

namespace Ariaieboy\FilamentJalaliDatetime;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Carbon;
use Morilog\Jalali\Jalalian;
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
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        TextColumn::macro('jalaliDate', function (?string $format = null, ?string $timezone = null): static {
            $format ??= config('filament-jalali-datetime.date_format');

            $this->formatStateUsing(static function (Column $column, $state) use ($format, $timezone): ?string {
                /** @var TextColumn $column */

                if (blank($state)) {
                    return null;
                }

                return Jalalian::fromCarbon(Carbon::parse($state)
                    ->setTimezone($timezone ?? $column->getTimezone()))
                    ->format($format);
            });

            return $this;
        });

        TextColumn::macro('jalaliDateTime', function (?string $format = null, ?string $timezone = null): static {
            $format ??= config('filament-jalali-datetime.date_time_format');

            $this->jalaliDate($format, $timezone);

            return $this;
        });
    }
}
