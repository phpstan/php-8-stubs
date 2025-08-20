<?php 

#[\Until('8.4')]
function hash_update(\HashContext $context, string $data): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function hash_update(\HashContext $context, string $data): true
{
}
#[\Since('8.5')]
function hash_update(\HashContext $context, string $data): true
{
}