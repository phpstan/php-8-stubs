<?php 

#ifdef PHP_ODBC_HAVE_FETCH_HASH
/** @param resource $result */
function odbc_fetch_object($result, int $rownumber = -1) : \stdClass|false
{
}