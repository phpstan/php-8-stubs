<?php 

#[\Until('8.1')]
function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false): string
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string
{
}
/**
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function hash_pbkdf2(string $algo, #[\SensitiveParameter] string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string
{
}
/**
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function hash_pbkdf2(string $algo, #[\SensitiveParameter] string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string
{
}
/**
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function hash_pbkdf2(string $algo, #[\SensitiveParameter] string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string
{
}
/**
 * @refcount 1
 */
#[\Since('8.5')]
function hash_pbkdf2(string $algo, #[\SensitiveParameter] string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string
{
}