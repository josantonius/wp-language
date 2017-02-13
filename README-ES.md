# PHP WordPress Language library

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-language/v/stable)](https://packagist.org/packages/josantonius/wp-language) [![Total Downloads](https://poser.pugx.org/josantonius/wp-language/downloads)](https://packagist.org/packages/josantonius/wp-language) [![Latest Unstable Version](https://poser.pugx.org/josantonius/wp-language/v/unstable)](https://packagist.org/packages/josantonius/wp-language) [![License](https://poser.pugx.org/josantonius/wp-language/license)](https://packagist.org/packages/josantonius/wp-language)

[Spanish version](README-ES.md)

Carga de complemento de dominio de texto para traducciones.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Uso](#uso)
- [Tests](#tests)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Autor](#autor)
- [Licencia](#licencia)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP WordPress Language library, simplemente escribe:

    $ composer require Josantonius/WP-Language

### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

Para utilizar esta librería en HHVM (HipHop Virtual Machine) tendrás que activar los tipos escalares. Añade la siguiente ĺínea "hhvm.php7.scalar_types = true" en tu "/etc/hhvm/php.ini".

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP\Language\Language;
```
### Uso

Ejemplo de uso para esta librería:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP\Language\Language;

new Language('textdomain', dirname(plugin_basename(__FILE__)).'/languages/');

echo __('Texto a traducir', 'textdomain');

```

### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Autor

Mantenido por [Josantonius](https://github.com/Josantonius/).

### Licencia

Este proyecto está licenciado bajo la **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.