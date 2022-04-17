<?php 

#ifdef HAVE_EVP_PKEY_EC
/**
 * @return array<int, string>|false
 * @refcount 1
 */
function openssl_get_curve_names() : array|false
{
}