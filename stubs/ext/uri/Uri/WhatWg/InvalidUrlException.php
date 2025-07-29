<?php 

namespace Uri\WhatWg;

/** @strict-properties */
#[\Since('8.5')]
class InvalidUrlException extends \Uri\InvalidUriException
{
    public readonly array $errors;
    public function __construct(string $message = "", array $errors = [], int $code = 0, ?\Throwable $previous = null)
    {
    }
}