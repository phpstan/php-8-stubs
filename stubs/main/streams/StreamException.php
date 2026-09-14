<?php 

#[\Since('8.6')]
class StreamException extends \Exception
{
    /** @var array<int, StreamError> */
    private array $errors = [];
    /** @return array<int, StreamError> */
    public function getErrors(): array
    {
    }
}