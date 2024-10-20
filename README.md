# CI environment detection

This library is freely adapted from [watson/ci-info](https://github.com/watson/ci-info) npm module.

It detects if PHP is running in a CI environment and which one.

Nearly [50 CI vendors](https://github.com/watson/ci-info?tab=readme-ov-file#supported-ci-tools) are currently supported. 

## Installation

```shell
$ composer require keven/ci-detect
```

## Usage

```php
<?php

use Keven\CiDetect\Detector;
use Keven\CiDetect\CI;

$vendor = (new Detector)->detect();

$vendor->name; // ex.: Travis CI
$vendor->inPR; // (bool) Are we in a PR?

CI::is('Gitlab'); // (bool) Utility to quickly check a given vendor name
```

## Update vendors

If the library lags behind [watson/ci-info](https://github.com/watson/ci-info) in terms of supported vendors, you can update
the vendor list by running:

```shell
$ php bin/update.php
```

...which will trigger a synchronization from [watson/ci-info](https://github.com/watson/ci-info) repository:

```
  Download https://raw.githubusercontent.com/watson/ci-info/refs/heads/master/vendors.json
  Update data at data/vendors.php
```

## Declare a vendor or an ENV matching rule

You can declare a new CI vendor manually, for testing purpose, by adding it to `data/vendors.php`.

Be aware that the file will be overwritten each time you run `php bin/update.php`.

Please contribute to [watson/ci-info](https://github.com/watson/ci-info) to declare vendors for the benefit of everybody.

If matching rules evolve in `vendors.json`, you can add new matching rules in this package by creating a new class implementing [`Rule`](./src/Env/Rule.php) interface.
