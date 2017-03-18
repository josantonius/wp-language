# PHP WordPress Language

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-language/v/stable)](https://packagist.org/packages/josantonius/wp-language) [![Total Downloads](https://poser.pugx.org/josantonius/wp-language/downloads)](https://packagist.org/packages/josantonius/wp-language) [![Latest Unstable Version](https://poser.pugx.org/josantonius/wp-language/v/unstable)](https://packagist.org/packages/josantonius/wp-language) [![License](https://poser.pugx.org/josantonius/wp-language/license)](https://packagist.org/packages/josantonius/wp-language)

[Versión en español](README-ES.md)

Load text domain plugin for translations.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Usage](#usage)
- [Contribute](#contribute)
- [Repository](#repository)
- [Licensing](#licensing)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Wordpress Language library, simply:

    $ composer require Josantonius/WP-Language

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    $ composer require Josantonius/WP-Language --prefer-source

También puedes clonar el repositorio completo con Git:

	$ git clone https://github.com/Josantonius/WP-Language.git
	
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

Language::load('textdomain', dirname(plugin_basename(__FILE__)).'/languages/');

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

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).