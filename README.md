# Inserve API

A PHP Wrapper for [Metabase](https://metabase.com)

## Requirements
- PHP 8.2

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
