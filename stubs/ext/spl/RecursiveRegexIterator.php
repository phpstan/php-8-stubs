<?php 

class RecursiveRegexIterator extends \RegexIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0)
    {
    }
    /** @return bool */
    public function accept()
    {
    }
    /**
     * @return bool
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    public function hasChildren()
    {
    }
    /** @return RecursiveRegexIterator */
    public function getChildren()
    {
    }
}