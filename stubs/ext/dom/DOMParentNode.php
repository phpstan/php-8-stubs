<?php 

interface DOMParentNode
{
    /** @param DOMNode|string $nodes */
    public function append(...$nodes): void;
    /** @param DOMNode|string $nodes */
    public function prepend(...$nodes): void;
    /** @param DOMNode|string $nodes */
    #[\Since('8.2')]
    public function replaceChildren(...$nodes): void;
}