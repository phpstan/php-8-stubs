<?php 

class FilesystemIterator extends \DirectoryIterator
{
    public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : string
    {
    }
    /** @return string|SplFileInfo|FilesystemIterator */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : string|SplFileInfo|FilesystemIterator
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFlags() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setFlags(int $flags)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setFlags(int $flags) : void
    {
    }
}