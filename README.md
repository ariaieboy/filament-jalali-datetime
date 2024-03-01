![Ariaieboy Jalali DateTime](https://preview.dragon-code.pro/Ariaieboy/Jalali-DateTime.svg?brand=laravel)
# a Jalali DateTime Column for filament table builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ariaieboy/filament-jalali-datetime.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetime)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ariaieboy/filament-jalali-datetime/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ariaieboy/filament-jalali-datetime/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ariaieboy/filament-jalali-datetime.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetime)

This package will add a Jalali DateTime Column for filament table builder

## Installation
> NOTE: If you are using laravel >11 add `nesbot/carbon:"^2"` into your composer.json and update your packages before installing this package.

You can install the package via composer:

```bash
composer require ariaieboy/filament-jalali-datetime
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-jalali-datetime-config"
```

This is the contents of the published config file:

```php
// config for Ariaieboy/FilamentJalaliDatetime
return [
    'date_format'=>'Y/m/d',
    'date_time_format'=>'Y/m/d H:i:s',
];
```

## Usage

```php
//instead of this :
use Filament\Tables\Columns\TextColumn;
 
TextColumn::make('created_at')->dateTime()

//Since v1.2 you can use the code below to show Jalali date and dateTime

TextColumn::make('created_at')->jalaliDate();
TextColumn::make('created_at')->jalaliDateTime();

//you can use the code below for jalali datetime
use Ariaieboy\FilamentJalaliDatetime\JalaliDateTimeColumn;
 
JalaliDateTimeColumn::make('created_at')->dateTime() // it will show the date like this : 1401/03/15 20:18:52
//or
JalaliDateTimeColumn::make('created_at')->date() // it will show the date like this : 1401/03/15

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AriaieBOY](https://github.com/ariaieboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
