<?php 

#[\Until('8.1')]
function pspell_suggest(int $dictionary, string $word): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_suggest(\PSpell\Dictionary $dictionary, string $word): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_suggest(\PSpell\Dictionary $dictionary, string $word): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.3')]
function pspell_suggest(\PSpell\Dictionary $dictionary, string $word): array|false
{
}