# Short Description
This package is a basic implementation of Products feature for Laravel e-commerce stores
## Installation

You can install the package via composer:

```bash
composer require appkonik/products
```

## Usage

```php
Publish migrations via:
php artisan vendor:publish --provider="Appkonik\Products\ProductsServiceProvider" --tag="migrations" 
```

```php
This package includes 4 basic CRUD methods:
GET, ADD, UPDATE, DELETE
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@appkonik.com instead of using the issue tracker.

## Credits

-   [Appkonik LLC](https://github.com/appkonik)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.