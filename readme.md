# Laravel Laroute

This package is an extension of `aaronlord/laroute` to lighten the` laroute.js` file
by providing only the names and URLs of the routes; the other properties (host, methods, action)
are useless in most cases. Also we think that it is not safe to expose the paths of the classes
of the application; so we are more secure as well.

## Installation

Install the package with Composer:

```
composer require axn/laravel-laroute
```

Add the package service provider to your providers array in `config/app.php`:

```php
'providers' => [
    // ...
    Axn\Laroute\ServiceProvider::class,
],
```

## Usage

See the reader of `aaronlord/laroute`: https://github.com/aaronlord/laroute

The difference is that the `action` and` link_to_action` methods are no longer usable
as the road actions have been removed from `laroute.js`.
