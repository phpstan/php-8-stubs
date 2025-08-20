<?php 

#[\Until('8.1')]
function pspell_new_config(int $config): int|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_new_config(\PSpell\Config $config): \PSpell\Dictionary|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_new_config(\PSpell\Config $config): \PSpell\Dictionary|false
{
}
#[\Since('8.3')]
function pspell_new_config(\PSpell\Config $config): \PSpell\Dictionary|false
{
}