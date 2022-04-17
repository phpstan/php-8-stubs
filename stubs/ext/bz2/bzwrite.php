<?php 

/**
 * @param resource $bz
 * @implementation-alias fwrite
 * @no-verify Uses different parameter name
 */
function bzwrite($bz, string $data, ?int $length = null) : int|false
{
}