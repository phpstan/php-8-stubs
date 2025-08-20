<?php 

#if defined(HAVE_OPENSSL_ARGON2)
#[\Since('8.4')]
#[\Until('8.5')]
function openssl_password_hash(string $algo, #[\SensitiveParameter] string $password, array $options = []): string
{
}
#if defined(HAVE_OPENSSL_ARGON2)
#[\Since('8.5')]
function openssl_password_hash(string $algo, #[\SensitiveParameter] string $password, array $options = []): string
{
}