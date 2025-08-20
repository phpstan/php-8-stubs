<?php 

#[\Until('8.1')]
function pspell_config_save_repl(int $config, bool $save): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_config_save_repl(\PSpell\Config $config, bool $save): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_config_save_repl(\PSpell\Config $config, bool $save): bool
{
}
#[\Since('8.3')]
function pspell_config_save_repl(\PSpell\Config $config, bool $save): bool
{
}