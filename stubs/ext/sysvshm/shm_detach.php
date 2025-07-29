<?php 

#[\Until('8.5')]
function shm_detach(\SysvSharedMemory $shm): bool
{
}
#[\Since('8.5')]
function shm_detach(\SysvSharedMemory $shm): true
{
}