# Display the Dynamate-branded signature

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-dynamate-signature)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-dynamate-signature)
![GitHub Actions](https://github.com/esign/laravel-dynamate-signature/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-dynamate-signature
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\DynamateSignature\DynamateSignatureServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
