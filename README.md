<p align="center">Laravel Package for ICObench API</p>

<p align="center">
<a href="https://packagist.org/packages/fixik/icobench"><img src="https://poser.pugx.org/fixik/icobench/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/fixik/icobench"><img src="https://poser.pugx.org/fixik/icobench/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/fixik/icobench"><img src="https://poser.pugx.org/fixik/icobench/license.svg" alt="License"></a>
</p>

## Installation

`composer require fixik/icobench`

- add provider to config of app.php file

```php
Fixik\ICOBench\ICOBenchAPIServiceProvider::class,
```
- add keys to .env file

```
ICO_BENCH_PRIVATE_API_KEY=
ICO_BENCH_PUBLIC_API_KEY=
```

`php artisan vendor:pablish`

## Basic Usage
[https://icobench.com/developers](https://icobench.com/developers)

## License

Laravel IP Geocoder is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
