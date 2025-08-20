<?php 

#[\Since('8.2')]
#[\Until('8.4')]
function lcg_value(): float
{
}
#[\Deprecated(since: '8.4', message: "use \\Random\\Randomizer::getFloat() instead")]
#[\Since('8.4')]
function lcg_value(): float
{
}