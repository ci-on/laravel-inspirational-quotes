# Laravel Inspirational Quotes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cion/laravel-inspirational-quotes.svg?style=flat-square)](https://packagist.org/packages/cion/laravel-inspirational-quotes)
[![Build Status](https://img.shields.io/travis/ci-on/laravel-inspirational-quotes/master.svg?style=flat-square)](https://travis-ci.org/ci-on/laravel-inspirational-quotes)
[![Quality Score](https://img.shields.io/scrutinizer/g/ci-on/laravel-inspirational-quotes.svg?style=flat-square)](https://scrutinizer-ci.com/g/ci-on/laravel-inspirational-quotes)
[![Total Downloads](https://img.shields.io/packagist/dt/cion/laravel-inspirational-quotes.svg?style=flat-square)](https://packagist.org/packages/ci-on/laravel-inspirational-quotes)
[![StyleCI](https://github.styleci.io/repos/179175924/shield?branch=master)](https://github.styleci.io/repos/179175924)

This package will generate an inspirational quote for you. Similar to Laravel's default `php artisan inspire`, it includes the same quotes plus more. Easily access the author name and author head shot as well.

## Installation

You can install the package via composer:

```bash
composer require cion/laravel-inspirational-quotes
```

The service provider and alias will automatically get registered.

## Usage

``` bash
php artisan inspire
```

``` php
$quote = InspirationalQuote::getRandomQuote();

// $quote output
[
    'quote' => 'Simplicity is the ultimate sophistication.',
    'by' => 'Leonardo da Vinci',
    'avatar' => 'https://i.imgur.com/fk7VpK6.png',
]
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email chris@cion.agency instead of using the issue tracker.

## Credits

- [Chris Breuer](https://github.com/ci-on)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
