<?php 

namespace Uri\WhatWg;

/** @strict-properties */
#[\Since('8.5')]
final readonly class UrlValidationError
{
    public string $context;
    public \Uri\WhatWg\UrlValidationErrorType $type;
    public bool $failure;
    public function __construct(string $context, \Uri\WhatWg\UrlValidationErrorType $type, bool $failure)
    {
    }
}