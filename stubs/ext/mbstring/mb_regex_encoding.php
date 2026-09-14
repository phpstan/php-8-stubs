<?php 

#ifdef HAVE_MBREGEX
#[\Until('8.6')]
function mb_regex_encoding(?string $encoding = null): string|bool
{
}
#ifdef HAVE_MBREGEX
/** @refcount 1 */
#[\Deprecated(since: '8.6', message: "because the underlying library is no longer maintained")]
#[\Since('8.6')]
function mb_regex_encoding(?string $encoding = null): string|bool
{
}