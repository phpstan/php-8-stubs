<?php 

class RecursiveDirectoryIterator extends \FilesystemIterator implements \RecursiveIterator
{
    public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }
    /** @return bool */
    public function hasChildren(bool $allow_links = false)
    {
    }
    /** @return RecursiveDirectoryIterator */
    public function getChildren()
    {
    }
    /** @return string */
    public function getSubPath()
    {
    }
    /** @return string */
    public function getSubPathname()
    {
    }
}