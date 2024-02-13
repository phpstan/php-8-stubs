<?php 

#endif
#ifdef crypto_aead_aegis128l_KEYBYTES
#[\Since('8.2')]
function sodium_crypto_aead_aegis128l_decrypt(string $ciphertext, string $additional_data, string $nonce, #[\SensitiveParameter] string $key): string|false
{
}