<?php 

#[\Until('8.1')]
function pspell_config_personal(int $config, string $filename): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_config_personal(\PSpell\Config $config, string $filename): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_config_personal(\PSpell\Config $config, string $filename): bool
{
}
#[\Since('8.3')]
function pspell_config_personal(\PSpell\Config $config, string $filename): bool
{
}