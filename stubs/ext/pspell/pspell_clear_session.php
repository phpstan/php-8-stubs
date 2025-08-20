<?php 

#[\Until('8.1')]
function pspell_clear_session(int $dictionary): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_clear_session(\PSpell\Dictionary $dictionary): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_clear_session(\PSpell\Dictionary $dictionary): bool
{
}
#[\Since('8.3')]
function pspell_clear_session(\PSpell\Dictionary $dictionary): bool
{
}