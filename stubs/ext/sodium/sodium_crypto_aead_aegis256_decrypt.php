<?php 

#endif
#ifdef crypto_aead_aegis256_KEYBYTES
#[\Since('8.4')]
#[\Until('8.5')]
function sodium_crypto_aead_aegis256_decrypt(string $ciphertext, string $additional_data, string $nonce, #[\SensitiveParameter] string $key): string|false
{
}
#endif
#ifdef crypto_aead_aegis256_KEYBYTES
#[\Since('8.5')]
function sodium_crypto_aead_aegis256_decrypt(string $ciphertext, string $additional_data, string $nonce, #[\SensitiveParameter] string $key): string|false
{
}