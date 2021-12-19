PHP 8 stubs
====================

The stubs are automatically extracted from [php-src](https://github.com/php/php-src/) and are relevant for analyzing codebases that use PHP 8 or later.

## Local Setup

from the project root use the following commands:

```
mkdir php-src/
cd php-src/
git clone https://github.com/php/php-src.git .
git checkout PHP-8.1
cd ..

cd extractor/
composer install
cd ..

php ./extractor/extract.php
```
