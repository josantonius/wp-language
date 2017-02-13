# PHP WordPress Language

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-language/v/stable)](https://packagist.org/packages/josantonius/wp-language) [![Total Downloads](https://poser.pugx.org/josantonius/wp-language/downloads)](https://packagist.org/packages/josantonius/wp-language) [![Latest Unstable Version](https://poser.pugx.org/josantonius/wp-language/v/unstable)](https://packagist.org/packages/josantonius/wp-language) [![License](https://poser.pugx.org/josantonius/wp-language/license)](https://packagist.org/packages/josantonius/wp-language)

[Spanish version](README-ES.md)

Load text domain plugin for translations.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Usage](#usage)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Wordpress Language library, simply:

    $ composer require Josantonius/WP-Language

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP\Language\Language;
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP\Language\Language;

new Language('textdomain', dirname(plugin_basename(__FILE__)).'/languages/');

echo __('Text to translate', 'textdomain');

```

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.