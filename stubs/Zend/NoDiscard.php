<?php 

/**
 * @strict-properties
 */
#[\Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
#[\Since('8.5')]
final class NoDiscard
{
    public function __construct(?string $message = null)
    {
    }
}