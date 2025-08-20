<?php 

class DOMDocumentFragment extends \DOMNode implements \DOMParentNode
{
    /** @param DOMNode|string $nodes */
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function replaceChildren(...$nodes): void
    {
    }
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
     * @implementation-alias DOMDocument::replaceChildren
     */
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function replaceChildren(...$nodes): void
    {
    }
    /**
     * @param DOMNode|string $nodes
     * @implementation-alias DOMDocument::replaceChildren
     */
    #[\Since('8.5')]
    public function replaceChildren(...$nodes): void
    {
    }
}