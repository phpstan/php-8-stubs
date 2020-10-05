<?php 

#ifdef HAVE_GLOB
class GlobIterator extends \FilesystemIterator implements \Countable
{
    public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }
    /** @return int */
    public function count()
    {
    }
}