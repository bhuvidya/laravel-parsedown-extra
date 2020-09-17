This is based on the [Laravel Parsedown](https://github.com/parsedown/laravel) package. I have merely done some
adjustments to support Parsedown Extra.


## Parsedown for Laravel

[![Build Status](https://travis-ci.org/bhuvidya/laravel-parsedown-extra.svg?branch=master)](https://travis-ci.org/bhuvidya/laravel-parsedown-extra)

**Note I have now switched the semver versioning for my Laravel packages to "match" the latest supported Laravel version.**

A [Laravel](https://github.com/laravel/laravel) wrapper of **Parsedown Extra** to extend its features. If you want to know more about **Parsedown Extra** alone check out the [base repository](https://github.com/erusev/parsedown-extra).

### Features

* Blade Directive
* Helper Function

### Installation

**Parsedown Extra for Laravel** is available as [a composer package](https://packagist.org/packages/bhuvidya/laravelparsedown-extra). You can install it using the command below:

``` bash
composer require "bhuvidya/laravel-parsedown-extra"
```

### Configuration

If you're using **Laravel** +5.5 you don't need to follow the steps below. The [package auto-discovery](https://laravel-news.com/package-auto-discovery) feature has been implemented and will take care of loading the service provider for you.

But if that's not your case you just need to add the service provider to your `config/app.php`:
``` php
return [
    // Other configurations above...

    'providers' => [
        // Other providers above...
        Bhuvidya\ParsedownExtra\Providers\ParsedownExtraServiceProvider::class,
        // Other providers below...
    ],

    // Other configurations below...
];
```

### Usage

``` blade
@parsedownextra('Hello _Parsedown_!')
```

or (using a helper approach)

``` blade
{{ parsedownextra('Hello _Parsedown_!') }}
```

Any of the codes above will generate:

``` html
<p>Hello <em>Parsedown</em>!</p>
```

The helper can also be used with **PHP** throughout the project.

## Lumen Support

As **Laravel** and **Lumen** share pretty much the same core the instructions below should be enough to set this package in yout **Lumen** project.

### Enable Facades in Your Project

In your `bootstrap/app.php` ensure you have the following:

```php
$app->withFacades();
```

### Service Provider Registering

As **Lumen** does not support package auto-discovery you got to do it manually adding the code below in your `bootstrap/app.php`:

```php
$app->register(Bhuvidya\ParsedownExtra\Providers\ParsedownServiceProvider::class);
```
