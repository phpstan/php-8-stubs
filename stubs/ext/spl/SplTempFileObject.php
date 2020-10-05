<?php 

class SplTempFileObject extends \SplFileObject
{
    public function __construct(int $max_memory = 2 * 1024 * 1024)
    {
    }
}