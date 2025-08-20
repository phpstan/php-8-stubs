<?php 

#[\Until('8.1')]
function pspell_config_mode(int $config, int $mode): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_config_mode(\PSpell\Config $config, int $mode): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_config_mode(\PSpell\Config $config, int $mode): bool
{
}
#[\Since('8.3')]
function pspell_config_mode(\PSpell\Config $config, int $mode): bool
{
}