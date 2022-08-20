# PHP WordPress Language

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-language/v/stable)](https://packagist.org/packages/josantonius/wp-language)
[![License](https://poser.pugx.org/josantonius/wp-language/license)](https://packagist.org/packages/josantonius/wp-language)

[English version](README.md)

Carga de complemento de dominio de texto para traducciones.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Uso](#uso)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

### Instalación

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP WordPress Language library, simplemente escribe:

    composer require josantonius/wp-language

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    composer require josantonius/wp-language --prefer-source

También puedes clonar el repositorio completo con Git:

 git clone <https://github.com/josantonius/wp-language.git>

### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

Para utilizar esta librería en HHVM (HipHop Virtual Machine) tendrás que activar los tipos escalares. Añade la siguiente ĺínea "hhvm.php7.scalar_types = true" en tu "/etc/hhvm/php.ini".

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Language\WP_Language;
```

### Uso

Ejemplo de uso para esta librería:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Language\WP_Language;

WP_Language::load('textdomain', dirname(plugin_basename(__FILE__)).'/languages/');

echo __('Texto a traducir', 'textdomain');
```

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
