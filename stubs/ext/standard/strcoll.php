<?php 

#endif
#[\Until('8.6')]
function strcoll(string $string1, string $string2): int
{
}
#endif
#[\Deprecated(message: "use Collator::compare() instead", since: "8.6")]
#[\Since('8.6')]
function strcoll(string $string1, string $string2): int
{
}