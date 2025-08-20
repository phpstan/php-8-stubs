<?php 

#[\Until('8.1')]
function pspell_add_to_session(int $dictionary, string $word): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_add_to_session(\PSpell\Dictionary $dictionary, string $word): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_add_to_session(\PSpell\Dictionary $dictionary, string $word): bool
{
}
#[\Since('8.3')]
function pspell_add_to_session(\PSpell\Dictionary $dictionary, string $word): bool
{
}