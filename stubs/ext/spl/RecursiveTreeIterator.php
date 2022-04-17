<?php 

class RecursiveTreeIterator extends \RecursiveIteratorIterator
{
    /** @param RecursiveIterator|IteratorAggregate $iterator */
    public function __construct($iterator, int $flags = RecursiveTreeIterator::BYPASS_KEY, int $cachingIteratorFlags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveTreeIterator::SELF_FIRST)
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : mixed
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getPrefix()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPrefix() : string
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setPostfix(string $postfix)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPostfix(string $postfix) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setPrefixPart(int $part, string $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPrefixPart(int $part, string $value) : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getEntry()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getEntry() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getPostfix()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPostfix() : string
    {
    }
}