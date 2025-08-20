<?php 

#[\Until('8.1')]
function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string $tag = "", string $aad = ""): string|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function openssl_decrypt(string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function openssl_decrypt(string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function openssl_decrypt(string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false
{
}
#[\Since('8.5')]
function openssl_decrypt(string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false
{
}