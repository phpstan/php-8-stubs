<?php 

#if U_ICU_VERSION_MAJOR_NUM >= 74
#[\Since('8.4')]
#[\Until('8.5')]
function intltz_get_iana_id(string $timezoneId): string|false
{
}
#if U_ICU_VERSION_MAJOR_NUM >= 74
#[\Since('8.5')]
function intltz_get_iana_id(string $timezoneId): string|false
{
}