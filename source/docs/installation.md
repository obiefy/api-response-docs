---
title: Getting Started
description: Getting started with Laravel API response docs.
extends: _layouts.documentation
section: content
---

# Getting Started {#getting-started}

Getting started with Laravel API response docs.

## Installation {#getting-started-installation}

1. Install the package through composer:

    `$ composer require obiefy/api-response`

2. Register the package service provider to the providers array in `app.php` file:

    `Obiefy\API\APIServiceProvider::class`

3. Register the package facade alias to the aliases array in `app.php` file:

    `'API' => Obiefy\API\Facades\API::class,`

5. And finally you can publish the config file:

    `php artisan vendor:publish --tag=api-response`

Note: You could also include "`use Obiefy\API\Facades\API;`" at the top of the class, but we recommend not to.

---
