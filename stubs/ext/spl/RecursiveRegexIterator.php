<?php 

class RecursiveRegexIterator extends \RegexIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator, string $pattern, int $mode = RecursiveRegexIterator::MATCH, int $flags = 0, int $pregFlags = 0)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function accept()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function accept() : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Until('8.1')]
    public function hasChildren()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Since('8.1')]
    public function hasChildren() : bool
    {
    }
    /** @return RecursiveRegexIterator */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : RecursiveRegexIterator
    {
    }
}