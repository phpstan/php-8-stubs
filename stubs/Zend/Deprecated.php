<?php 

/**
 * @strict-properties
 */
#[\Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION | Attribute::TARGET_CLASS_CONSTANT)]
#[\Since('8.4')]
final class Deprecated
{
    public function __construct(?string $message = null, ?string $since = null)
    {
    }
}