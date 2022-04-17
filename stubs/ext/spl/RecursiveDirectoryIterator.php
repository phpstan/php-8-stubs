<?php 

class RecursiveDirectoryIterator extends \FilesystemIterator implements \RecursiveIterator
{
    public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildren(bool $allowLinks = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildren(bool $allowLinks = false) : bool
    {
    }
    /** @return RecursiveDirectoryIterator */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : RecursiveDirectoryIterator
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getSubPath()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSubPath() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getSubPathname()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSubPathname() : string
    {
    }
}