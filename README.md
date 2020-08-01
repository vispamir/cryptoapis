# Cryptoapis.io

[CryptoAPIs](https://cryptoapis.io/) SDK for all Exchanges, Bitcoin, Litecoin, Bitcoin Cash, Doge Coin, Dash and Ethereum endpoints. You can get API key [here](https://dashboard.cryptoapis.io/register).

## Table of Contents

-   [How to use](#howtouse)

## How to use

```php
<?php

require_once __DIR__ . '/cryptoapis-autoload.php'; // Autoload files using Composer autoload

use \RestApis\Blockchain\Constants;

/*
 * You can get api key from https://dashboard.cryptoapis.io/register
 */
$apiKey = 'YOUR_API_KEY';

/*create instance*/
$instance = new \RestApis\Factory($apiKey);

/*
 * https://docs.cryptoapis.io/#list-all-exchanges
 *
 */

$exchanges = $instance->exchanges()->get(0,50);
print_r($result);
``` 

Check out [CryptoAPIs documentation](https://docs.cryptoapis.io) for more information.

