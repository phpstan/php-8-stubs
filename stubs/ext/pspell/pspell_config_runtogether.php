<?php 

#[\Until('8.1')]
function pspell_config_runtogether(int $config, bool $allow): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_config_runtogether(\PSpell\Config $config, bool $allow): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_config_runtogether(\PSpell\Config $config, bool $allow): bool
{
}
#[\Since('8.3')]
function pspell_config_runtogether(\PSpell\Config $config, bool $allow): bool
{
}