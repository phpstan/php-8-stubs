<?php 

namespace Uri\WhatWg;

/** @strict-properties */
#[\Since('8.5')]
final readonly class UrlValidationError
{
    public function __construct(string $context, \Uri\WhatWg\UrlValidationErrorType $type, bool $failure)
    {
    }
}