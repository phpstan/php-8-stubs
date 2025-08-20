<?php 

#[\Until('8.1')]
function pspell_config_create(string $language, string $spelling = "", string $jargon = "", string $encoding = ""): int
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pspell_config_create(string $language, string $spelling = "", string $jargon = "", string $encoding = ""): \PSpell\Config
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pspell_config_create(string $language, string $spelling = "", string $jargon = "", string $encoding = ""): \PSpell\Config
{
}
#[\Since('8.3')]
function pspell_config_create(string $language, string $spelling = "", string $jargon = "", string $encoding = ""): \PSpell\Config
{
}