<?php 

#[\Until('8.5')]
function readline_add_history(string $prompt): bool
{
}
#[\Since('8.5')]
function readline_add_history(string $prompt): true
{
}