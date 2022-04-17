<?php 

class DOMAttr extends \DOMNode
{
    public function __construct(string $name, string $value = "")
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isId()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isId() : bool
    {
    }
}