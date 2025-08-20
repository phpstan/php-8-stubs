<?php 

#if defined(crypto_stream_xchacha20_KEYBYTES)
#[\Since('8.1')]
#[\Until('8.2')]
function sodium_crypto_stream_xchacha20(int $length, string $nonce, string $key): string
{
}
#if defined(crypto_stream_xchacha20_KEYBYTES)
#[\Since('8.2')]
#[\Until('8.3')]
function sodium_crypto_stream_xchacha20(int $length, string $nonce, #[\SensitiveParameter] string $key): string
{
}
#if defined(crypto_stream_xchacha20_KEYBYTES)
#[\Since('8.3')]
#[\Until('8.4')]
function sodium_crypto_stream_xchacha20(int $length, string $nonce, #[\SensitiveParameter] string $key): string
{
}
#if defined(crypto_stream_xchacha20_KEYBYTES)
#[\Since('8.4')]
#[\Until('8.5')]
function sodium_crypto_stream_xchacha20(int $length, string $nonce, #[\SensitiveParameter] string $key): string
{
}
#if defined(crypto_stream_xchacha20_KEYBYTES)
#[\Since('8.5')]
function sodium_crypto_stream_xchacha20(int $length, string $nonce, #[\SensitiveParameter] string $key): string
{
}