# PHP WordPress Language

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-language/v/stable)](https://packagist.org/packages/josantonius/wp-language)
[![License](https://poser.pugx.org/josantonius/wp-language/license)](https://packagist.org/packages/josantonius/wp-language)

[Versión en español](README-ES.md)

Load text domain plugin for translations.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Usage](#usage)
- [Sponsor](#Sponsor)
- [License](#license)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Wordpress Language library, simply:

    composer require josantonius/wp-language

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    composer require josantonius/wp-language --prefer-source

También puedes clonar el repositorio completo con Git:

 git clone <https://github.com/josantonius/wp-language.git>

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Language\WP_Language;
```

### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Language\WP_Language;

WP_Language::load('textdomain', dirname(plugin_basename(__FILE__)).'/languages/');

echo __('Text to translate', 'textdomain');
```

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
