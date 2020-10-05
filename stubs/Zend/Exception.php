<?php 

class Exception implements \Throwable
{
    private final function __clone()
    {
    }
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
    }
    public function __wakeup()
    {
    }
    public final function getMessage() : string
    {
    }
    /** @return int */
    public final function getCode()
    {
    }
    public final function getFile() : string
    {
    }
    public final function getLine() : int
    {
    }
    public final function getTrace() : array
    {
    }
    public final function getPrevious() : ?Throwable
    {
    }
    public final function getTraceAsString() : string
    {
    }
    public function __toString() : string
    {
    }
}