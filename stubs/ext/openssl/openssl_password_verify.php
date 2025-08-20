<?php 

#[\Since('8.4')]
#[\Until('8.5')]
function openssl_password_verify(string $algo, #[\SensitiveParameter] string $password, string $hash): bool
{
}
#[\Since('8.5')]
function openssl_password_verify(string $algo, #[\SensitiveParameter] string $password, string $hash): bool
{
}