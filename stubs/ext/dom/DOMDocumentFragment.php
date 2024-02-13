<?php 

class DOMDocumentFragment extends \DOMNode implements \DOMParentNode
{
    public function __construct()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function appendXML(string $data)
    {
    }
    /** @param DOMNode|string $nodes */
    public function append(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function prepend(...$nodes): void
    {
    }
    /**
     * @param DOMNode|string $nodes
     * @implementation-alias DOM\Document::replaceChildren
     */
    #[\Since('8.2')]
    public function replaceChildren(...$nodes): void
    {
    }
}