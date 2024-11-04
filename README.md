![workflow](https://github.com/inserveit/metabase-api-php/actions/workflows/build-actions.yml/badge.svg) 
[![Latest Stable Version](https://poser.pugx.org/inserve/metabase-api-php/v)](https://packagist.org/packages/inserve/metabase-api-php) 
[![Latest Unstable Version](https://poser.pugx.org/inserve/metabase-api-php/v/unstable)](https://packagist.org/packages/inserve/metabase-api-php)
[![License](https://poser.pugx.org/inserve/metabase-api-php/license)](https://packagist.org/packages/inserve/metabase-api-php)

# Inserve API
A PHP Wrapper for [Metabase](https://metabase.com)

## Requirements
[![PHP Version Require](https://poser.pugx.org/inserve/metabase-api-php/require/php)](https://packagist.org/packages/inserve/metabase-api-php)

## Installation
`composer require inserve/metabase-api-php`

## Example usage

```
<?php

use GuzzleHttp\Client;
use Inserve\MetabaseAPI\MetabaseAPI;
use Inserve\MetabaseAPI\Model\Database\Database;
use Inserve\MetabaseAPI\Model\Database\Details;

require 'vendor/autoload.php';

/** Setup a client and authenticate */
$client = new Client(['base_uri' => 'http://localhost:3000/']);
$api = new MetabaseAPI($client);
$api->authenticate('username', 'password');

/** Create a new database in Metabase */
$details = new Details();
$details
    ->setHost('127.0.0.1')
    ->setDbname('inserve-database')
    ->setUser('example')
    ->setPort(3306)
    ->setPassword('example')
;

$database = new Database();
$database
    ->setName('Inserve Metabase')
    ->setEngine('mysql')
    ->setDetails($details)
;

$result = $api->database->create($database);
```
