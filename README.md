# Laravel Inspirational Quotes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cion/laravel-inspirational-quotes.svg?style=flat-square)](https://packagist.org/packages/cion/laravel-inspirational-quotes)
[![Build Status](https://img.shields.io/travis/cion/laravel-inspirational-quotes/master.svg?style=flat-square)](https://travis-ci.org/ci-on/laravel-inspirational-quotes)
[![Quality Score](https://img.shields.io/scrutinizer/g/cion/laravel-inspirational-quotes.svg?style=flat-square)](https://scrutinizer-ci.com/g/ci-on/laravel-inspirational-quotes)
[![Total Downloads](https://img.shields.io/packagist/dt/cion/laravel-inspirational-quotes.svg?style=flat-square)](https://packagist.org/packages/ci-on/laravel-inspirational-quotes)

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
