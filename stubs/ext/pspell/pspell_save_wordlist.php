<?php 

#[\Until('8.1')]
function pspell_save_wordlist(int $dictionary): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_save_wordlist(\PSpell\Dictionary $dictionary): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_save_wordlist(\PSpell\Dictionary $dictionary): bool
{
}
#[\Since('8.3')]
function pspell_save_wordlist(\PSpell\Dictionary $dictionary): bool
{
}