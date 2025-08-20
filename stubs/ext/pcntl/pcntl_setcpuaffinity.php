<?php 

#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_setcpuaffinity(?int $process_id = null, array $cpu_ids = []): bool
{
}
#[\Since('8.5')]
function pcntl_setcpuaffinity(?int $process_id = null, array $cpu_ids = []): bool
{
}