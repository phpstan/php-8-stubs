PHP 8 stubs
====================

PHP stub files automatically extracted from [php-src](https://github.com/php/php-src/). Used by [PHPStan](https://phpstan.org/) to understand signatures of built-in PHP classes and functions for PHP 8.0+.

## Features

- **Version-aware stubs** covering PHP 8.0 through 8.5, with `#[\Since('x.y')]` and `#[\Until('x.y')]` attributes to track when symbols and signatures were added or removed.
- **Comprehensive coverage**: core language stubs (`Zend/`), 69 extensions (`ext/`), and 6 SAPIs (`sapi/`).
- **Version-aware class/function map** (`Php8StubsMap`) that accepts a `$phpVersionId` and returns only the symbols available in that PHP version.
- **Fully automated extraction** via `extractor/extract.php` — stubs are never hand-written.
- **Daily CI updates** that extract from all PHP 8.x branches, auto-tag releases, and open PRs in `phpstan/phpstan-src`.

## Usage

```php
$map = new \PHPStan\Php8StubsMap($phpVersionId); // e.g. 80300 for PHP 8.3.0
$map->classes;   // array<string, string> — lowercase class name => stub path
$map->functions; // array<string, string> — lowercase function name => stub path
```

## License

Dual-licensed under [MIT](LICENSE) and [PHP-3.01](stubs/LICENSE).
