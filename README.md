# SII Chile

Port de la gema [Sii Chile](https://github.com/sagmor/sii_chile)

## Instalación

```
composer require rodrigore/siichile
```

## Uso (Vanilla PHP)

```php
require 'vendor/autoload.php';

$consulta = (new Rodrigore\SIIChile\Consulta('76.170.582-2')).sii();
var_dump($consulta);
```

## Formatos del RUT

Los formatos validos para el rut pueden venir con puntos o sin estos, aunque es **necesario que venga el guion que separa el digito verificador**.

Ejemplo de rut valido:

* 76.170.582-2
* 76170582-2

## Dependencias

* [Guzzle](https://github.com/guzzle/guzzle)
* [DomCrawler](https://github.com/symfony/DomCrawler)
