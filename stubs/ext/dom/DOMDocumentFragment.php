<?php 

class DOMDocumentFragment extends \DOMNode implements \DOMParentNode
{
    public function __construct()
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function appendXML(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function appendXML(string $data) : bool
    {
    }
    /** @param DOMNode|string $nodes */
    public function append(...$nodes) : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function prepend(...$nodes) : void
    {
    }
}