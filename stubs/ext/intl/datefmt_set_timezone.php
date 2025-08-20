<?php 

/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Until('8.3')]
function datefmt_set_timezone(\IntlDateFormatter $formatter, $timezone): ?bool
{
}
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.3')]
#[\Until('8.4')]
function datefmt_set_timezone(\IntlDateFormatter $formatter, $timezone): bool
{
}
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.4')]
#[\Until('8.5')]
function datefmt_set_timezone(\IntlDateFormatter $formatter, $timezone): bool
{
}
#[\Since('8.5')]
function datefmt_set_timezone(\IntlDateFormatter $formatter, \IntlTimeZone|\DateTimeZone|string|null $timezone): bool
{
}