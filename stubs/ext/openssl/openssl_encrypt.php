<?php 

/** @param string $tag */
#[\Until('8.6')]
function openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", &$tag = null, string $aad = "", int $tag_length = 16): string|false
{
}
/**
 * @param string $tag
 */
#[\Since('8.6')]
function openssl_encrypt(#[\SensitiveParameter] string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", &$tag = null, ?string $aad = "", int $tag_length = 16): string|false
{
}