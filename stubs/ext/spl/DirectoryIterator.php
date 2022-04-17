<?php 

class DirectoryIterator extends \SplFileInfo implements \SeekableIterator
{
    public function __construct(string $directory)
    {
    }
    /** @tentative-return-type */
    public function getFilename()
    {
    }
    /** @tentative-return-type */
    public function getExtension()
    {
    }
    /** @tentative-return-type */
    public function getBasename(string $suffix = "")
    {
    }
    /** @tentative-return-type */
    public function isDot()
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function valid()
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function key()
    {
    }
    // TODO change return type to string
    /**
     * @tentative-return-type
     * @return DirectoryIterator
     */
    public function current()
    {
    }
    // TODO narrow return type
    /** @tentative-return-type */
    public function next()
    {
    }
    /** @tentative-return-type */
    public function seek(int $offset)
    {
    }
    /** @implementation-alias DirectoryIterator::getFilename */
    public function __toString() : string
    {
    }
}