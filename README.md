# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-form.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-form)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-form.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-form)
![GitHub Actions](https://github.com/processton-io/processton-form/actions/workflows/main.yml/badge.svg)

Generate Form for processton Client

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-form
```

## Usage

```php
ProcesstonForm::generateForm(
    'Title',
    'abc.com/submit-form',
    ProcesstonForm::generateFormRows([
        ProcesstonForm::generateFormRow(
            [
                ProcesstonForm::generateFormRowElement(
                    'label',
                    'text',
                    'map'
                )
            ],
            [],
            '',
            '',
            '',
            'row',
        )
    
    ])
);
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

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
