# Fractal Doctrine ORM Pagination Adapter

[![Latest Version](https://img.shields.io/github/release/thephpleague/fractal-paginator-doctrine.svg?style=flat-square)](https://github.com/thephpleague/fractal-paginator-doctrine/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/thephpleague/fractal-paginator-doctrine/master.svg?style=flat-square&label=tests)](https://travis-ci.org/thephpleague/fractal-paginator-doctrine)
[![Build Status](https://img.shields.io/circleci/build/gh/thephpleague/fractal-paginator-doctrine/master.svg?style=flat-square&label=code+style)](https://circleci.com/gh/thephpleague/fractal-paginator-doctrine)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/thephpleague/fractal-paginator-doctrine/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/fractal-paginator-doctrine/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/thephpleague/fractal-paginator-doctrine/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/fractal-paginator-doctrine)
[![Total Downloads](https://img.shields.io/packagist/dt/league/fractal-paginator-doctrine.svg?style=flat-square)](https://packagist.org/packages/league/fractal-paginator-doctrine)

Fractal provides a presentation and transformation layer for complex data output, the like found in
RESTful APIs, and works really well with JSON. Think of this as a view layer for your JSON/YAML/etc.

When building an API it is common for people to just grab stuff from the database and pass it
to `json_encode()`. This might be passable for "trivial" APIs but if they are in use by the public,
or used by mobile applications then this will quickly lead to inconsistent output.


## Install

Via Composer

``` bash
$ composer require league/fractal-paginator-doctrine
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.6
* PHP 7.0
* PHP 7.1
* PHP 7.2
* PHP 7.3
* PHP 7.4
* HHVM

## Documentation

Fractal has [full documentation](http://fractal.thephpleague.com), powered by [Jekyll](http://jekyllrb.com/).

Contribute to this documentation in the [gh-pages branch](https://github.com/thephpleague/fractal/tree/gh-pages/).

## License

The MIT License (MIT). Please see [License File](https://github.com/thephpleague/fractal/blob/master/LICENSE) for more information.
