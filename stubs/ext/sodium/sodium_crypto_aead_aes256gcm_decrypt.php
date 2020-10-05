<?php 

#ifdef HAVE_AESGCM
function sodium_crypto_aead_aes256gcm_decrypt(string $string, string $ad, string $nonce, string $key) : string|false
{
}