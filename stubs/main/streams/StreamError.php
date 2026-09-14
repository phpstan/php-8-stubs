<?php 

#[\Since('8.6')]
final readonly class StreamError
{
    public StreamErrorCode $code;
    public string $message;
    public string $wrapperName;
    public int $severity;
    public bool $terminating;
}