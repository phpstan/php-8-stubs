<?php 

/** @alias ini_set */
#[\Until('8.1')]
function ini_alter(string $option, string $value): string|false
{
}
/** @alias ini_set */
#[\Since('8.1')]
#[\Until('8.2')]
function ini_alter(string $option, string|int|float|bool|null $value): string|false
{
}
/** @alias ini_set */
#[\Since('8.2')]
#[\Until('8.3')]
function ini_alter(string $option, string|int|float|bool|null $value): string|false
{
}
/** @alias ini_set */
#[\Since('8.3')]
#[\Until('8.4')]
function ini_alter(string $option, string|int|float|bool|null $value): string|false
{
}
/** @alias ini_set */
#[\Since('8.4')]
#[\Until('8.5')]
function ini_alter(string $option, string|int|float|bool|null $value): string|false
{
}
/** @alias ini_set */
#[\Since('8.5')]
function ini_alter(string $option, string|int|float|bool|null $value): string|false
{
}