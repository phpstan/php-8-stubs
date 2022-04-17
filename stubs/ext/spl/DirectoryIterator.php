<?php 

class DirectoryIterator extends \SplFileInfo implements \SeekableIterator
{
    public function __construct(string $directory)
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getFilename()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFilename() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getExtension()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExtension() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getBasename(string $suffix = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getBasename(string $suffix = "") : string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDot()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDot() : bool
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
    /** @return bool */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function key()
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    #[\Since('8.1')]
    public function key() : mixed
    {
    }
    /** @return DirectoryIterator */
    #[\Until('8.1')]
    public function current()
    {
    }
    // TODO change return type to string
    /**
     * @tentative-return-type
     * @return DirectoryIterator
     */
    #[\Since('8.1')]
    public function current() : mixed
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function next()
    {
    }
    // TODO narrow return type
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function seek(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function seek(int $offset) : void
    {
    }
    /** @implementation-alias DirectoryIterator::getFilename */
    public function __toString() : string
    {
    }
}