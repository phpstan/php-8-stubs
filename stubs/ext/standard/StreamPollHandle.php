<?php 

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.6')]
final class StreamPollHandle implements \Io\Poll\Handle
{
    /** @param resource $stream */
    public function __construct($stream)
    {
    }
    /** @return resource */
    public function getStream()
    {
    }
    public function isValid(): bool
    {
    }
}