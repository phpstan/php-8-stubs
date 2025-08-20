<?php 

/* datetime.c */
#if HAVE_STRPTIME
#[\Until('8.4')]
function strptime(string $timestamp, string $format): array|false
{
}
/* datetime.c */
#ifdef HAVE_STRPTIME
/**
 * @return array<string, int|string>|false
 * @refcount 1
 */
#[\Deprecated(since: '8.2', message: 'use date_parse_from_format() (for locale-independent parsing), or IntlDateFormatter::parse() (for locale-dependent parsing) instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function strptime(string $timestamp, string $format): array|false
{
}
/* datetime.c */
#ifdef HAVE_STRPTIME
/**
 * @return array<string, int|string>|false
 * @refcount 1
 */
#[\Deprecated(since: '8.2', message: 'use date_parse_from_format() (for locale-independent parsing), or IntlDateFormatter::parse() (for locale-dependent parsing) instead')]
#[\Since('8.5')]
function strptime(string $timestamp, string $format): array|false
{
}