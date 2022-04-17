<?php 

class RecursiveDirectoryIterator extends \FilesystemIterator implements \RecursiveIterator
{
    public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }
    /** @tentative-return-type */
    public function hasChildren(bool $allowLinks = false)
    {
    }
    /** @tentative-return-type */
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    public function getSubPath()
    {
    }
    /** @tentative-return-type */
    public function getSubPathname()
    {
    }
}