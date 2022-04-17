<?php 

class FilesystemIterator extends \DirectoryIterator
{
    public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS)
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function key()
    {
    }
    /** @tentative-return-type */
    public function current()
    {
    }
    /** @tentative-return-type */
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    public function setFlags(int $flags)
    {
    }
}