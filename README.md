# Display a Dynamate-branded signature

[![Latest theme on Packagist](https://img.shields.io/packagist/v/esign/laravel-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-dynamate-signature)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-dynamate-signature)
![GitHub Actions](https://github.com/esign/laravel-dynamate-signature/actions/workflows/main.yml/badge.svg)

This package allows you to display a [Dynamate](https://www.dynamate.be)-branded signature in your Laravel application.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-dynamate-signature
```

## Usage
To display the Dynamate contact information in your head, please use following variant:
```blade
<x-dynamate-signature::head />
```

To display the Dynamate-branded signature, you may use any of the following variants:

```blade
<x-dynamate-signature::default />
<x-dynamate-signature::default theme="light" animated="{{ false }}" positionRight="10rem" positionAbsolute="{{ false }}" colorOverride="#ed1c24" />

<x-dynamate-signature::powered-by />
<x-dynamate-signature::powered-by theme="light" colorOverride="#ed1c24" />
```

In case you want to customize the view components you may publish the views:
```bash
php artisan vendor:publish --provider="Esign\DynamateSignature\DynamateSignatureServiceProvider" --tag="views"
```

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
