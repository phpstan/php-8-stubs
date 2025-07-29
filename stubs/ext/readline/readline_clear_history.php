<?php 

#[\Until('8.5')]
function readline_clear_history(): bool
{
}
#[\Since('8.5')]
function readline_clear_history(): true
{
}