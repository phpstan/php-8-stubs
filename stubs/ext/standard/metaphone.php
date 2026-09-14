<?php 

#endif
/* metaphone.c */
#[\Until('8.6')]
function metaphone(string $string, int $max_phonemes = 0): string
{
}
/* metaphone.c */
/** @refcount 1 */
#[\Deprecated(since: '8.6', message: 'use a userland phonetic matching library instead')]
#[\Since('8.6')]
function metaphone(string $string, int $max_phonemes = 0): string
{
}