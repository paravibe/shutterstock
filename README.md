# Shutterstock PHP wrapper

[![Latest Version](https://img.shields.io/github/release/paravibe/shutterstock.svg?style=flat-square)](https://github.com/paravibe/shutterstock/releases)
[![Build Status](https://img.shields.io/travis/paravibe/shutterstock.svg?style=flat-square)](https://travis-ci.org/paravibe/shutterstock)
[![Total Downloads](https://img.shields.io/packagist/dt/paravibe/shutterstock.svg?style=flat-square)](https://packagist.org/packages/paravibe/shutterstock)

## Installation
`composer require paravibe/shutterstock`

## How to use

### Initialize client
`$client = new \Shutterstock\Main\Client($access_token);`

Where `$access_token` is a token retrived during authorization procedure

Use any method described here https://api-reference.shutterstock.com
by passing proper HTTP method and endpoint to `createRequest()` method.

### GET/DELETE methods
```php
$get = $client->createRequest('GET', "users")->execute();
$data = $get->getDecodedBody();
```
