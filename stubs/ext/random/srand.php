<?php 

/** @alias mt_srand */
#[\Since('8.2')]
#[\Until('8.3')]
function srand(int $seed = UNKNOWN, int $mode = MT_RAND_MT19937): void
{
}
/** @alias mt_srand */
#[\Since('8.3')]
#[\Until('8.4')]
function srand(?int $seed = null, int $mode = MT_RAND_MT19937): void
{
}
/** @alias mt_srand */
#[\Since('8.4')]
#[\Until('8.5')]
function srand(?int $seed = null, int $mode = MT_RAND_MT19937): void
{
}
/** @alias mt_srand */
#[\Since('8.5')]
function srand(?int $seed = null, int $mode = MT_RAND_MT19937): void
{
}