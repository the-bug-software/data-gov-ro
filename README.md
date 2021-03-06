# DataGovRo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-bug-software/data-gov-ro.svg?style=flat-square)](https://packagist.org/packages/the-bug-software/data-gov-ro)
[![Actions Status](https://github.com/the-bug-software/data-gov-ro/workflows/PHPUnit/badge.svg)](https://github.com/the-bug-software/data-gov-ro/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/the-bug-software/data-gov-ro.svg?style=flat-square)](https://scrutinizer-ci.com/g/the-bug-software/data-gov-ro)
[![License](https://img.shields.io/packagist/l/thebugsoftware/stare-tva.svg?style=flat-square)](https://github.com/the-bug-software/data-gov-ro/blob/master/LICENSE.md)


PHP library that allows programmatic access to open data sets delivered by the public administration authorities and institutions from Romania.

## Installation

You can install the package via composer:

```bash
composer require the-bug-software/data-gov-ro
```

## Usage

#### Packages

``` php
use TheBugSoftware\DataGovRo\DataGovRo;

// 1. List Packages
$packages = DataGovRo::packages()->list();

// ------------------------------------------

// 2. Show a package details
$packages = DataGovRo::packages()->show($packageID);

// 3. Get a list with all the recently updated packages
$packages = DataGovRo::packages()->updated(); 
```

#### Groups
``` php
use TheBugSoftware\DataGovRo\DataGovRo;

// 1. List Groups
$groups = DataGovRo::groups()->list();

// ------------------------------------------

// 2. Show group details
$group = DataGovRo::groups()->show($groupID); 
```

#### Tags
``` php
use TheBugSoftware\DataGovRo\DataGovRo;

// 1. List Tags
$tags = DataGovRo::tags()->list();

// ------------------------------------------

// 2. Show tag details
$tag = DataGovRo::tags()->show($packageID);
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

If you discover any security related issues, please email robert.chiribuc@thebug.ro instead of using the issue tracker.

## Credits

- [Robert-Cristian Chiribuc](https://github.com/the-bug-software)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
