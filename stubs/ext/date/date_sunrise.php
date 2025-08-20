<?php 

#[\Until('8.4')]
function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = null, ?float $longitude = null, ?float $zenith = null, ?float $utcOffset = null): string|int|float|false
{
}
/**
 * @refcount 1
 */
#[\Deprecated(since: '8.1', message: 'use date_sun_info() instead')]
#[\Since('8.4')]
function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = null, ?float $longitude = null, ?float $zenith = null, ?float $utcOffset = null): string|int|float|false
{
}