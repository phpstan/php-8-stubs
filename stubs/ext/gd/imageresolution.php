<?php 

#[\Until('8.5')]
function imageresolution(\GdImage $image, ?int $resolution_x = null, ?int $resolution_y = null): array|bool
{
}
/**
 * @return array<int, int>|true
 * @refcount 1
 */
#[\Since('8.5')]
function imageresolution(\GdImage $image, ?int $resolution_x = null, ?int $resolution_y = null): array|true
{
}