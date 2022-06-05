<?php

namespace Ariaieboy\FilamentJalaliDatetime;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Carbon;
use Morilog\Jalali\Jalalian;

class JalaliDateTimeColumn extends TextColumn
{
    public function date(?string $format = null, ?string $timezone = null): static
    {
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
    }

    public function dateTime(?string $format = null, ?string $timezone = null): static
    {
        $format ??= config('filament-jalali-datetime.date_time_format');

        $this->date($format, $timezone);

        return $this;
    }
}
