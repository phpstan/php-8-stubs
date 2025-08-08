<?php 

/** @param IntlTimeZone|string|int|float|null $countryOrRawOffset */
#[\Until('8.5')]
function intltz_create_enumeration($countryOrRawOffset = null): \IntlIterator|false
{
}
#[\Since('8.5')]
function intltz_create_enumeration(string|int|null $countryOrRawOffset = null): \IntlIterator|false
{
}