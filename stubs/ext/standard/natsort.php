<?php 

#[\Until('8.2')]
function natsort(array &$array): bool
{
}
#[\Since('8.2')]
function natsort(array &$array): true
{
}