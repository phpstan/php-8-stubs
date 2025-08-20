<?php 

#[\Until('8.1')]
function hash_init(string $algo, int $flags = 0, string $key = ""): \HashContext
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function hash_init(string $algo, int $flags = 0, string $key = "", array $options = []): \HashContext
{
}
/**
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function hash_init(string $algo, int $flags = 0, #[\SensitiveParameter] string $key = "", array $options = []): \HashContext
{
}
/**
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function hash_init(string $algo, int $flags = 0, #[\SensitiveParameter] string $key = "", array $options = []): \HashContext
{
}
/**
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function hash_init(string $algo, int $flags = 0, #[\SensitiveParameter] string $key = "", array $options = []): \HashContext
{
}
/**
 * @refcount 1
 */
#[\Since('8.5')]
function hash_init(string $algo, int $flags = 0, #[\SensitiveParameter] string $key = "", array $options = []): \HashContext
{
}