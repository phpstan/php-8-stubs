<?php 

namespace Dom;

/** @strict-properties */
#[\Since('8.4')]
class Node
{
    final private function __construct()
    {
    }
    /** @readonly */
    public int $nodeType;
    /** @readonly */
    public string $nodeName;
    /** @readonly */
    public string $baseURI;
    /** @readonly */
    public bool $isConnected;
    /** @readonly */
    public ?Document $ownerDocument;
    /** @implementation-alias DOMNode::getRootNode */
    public function getRootNode(array $options = []): Node
    {
    }
    /** @readonly */
    public ?Node $parentNode;
    /** @readonly */
    public ?Element $parentElement;
    /** @implementation-alias DOMNode::hasChildNodes */
    public function hasChildNodes(): bool
    {
    }
    /** @readonly */
    public NodeList $childNodes;
    /** @readonly */
    public ?Node $firstChild;
    /** @readonly */
    public ?Node $lastChild;
    /** @readonly */
    public ?Node $previousSibling;
    /** @readonly */
    public ?Node $nextSibling;
    public ?string $nodeValue;
    public ?string $textContent;
    /** @implementation-alias DOMNode::normalize */
    public function normalize(): void
    {
    }
    /** @implementation-alias DOMNode::cloneNode */
    public function cloneNode(bool $deep = false): Node
    {
    }
    public function isEqualNode(?Node $otherNode): bool
    {
    }
    public function isSameNode(?Node $otherNode): bool
    {
    }
    public const int DOCUMENT_POSITION_DISCONNECTED = 0x1;
    public const int DOCUMENT_POSITION_PRECEDING = 0x2;
    public const int DOCUMENT_POSITION_FOLLOWING = 0x4;
    public const int DOCUMENT_POSITION_CONTAINS = 0x8;
    public const int DOCUMENT_POSITION_CONTAINED_BY = 0x10;
    public const int DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC = 0x20;
    public function compareDocumentPosition(Node $other): int
    {
    }
    public function contains(?Node $other): bool
    {
    }
    public function lookupPrefix(?string $namespace): ?string
    {
    }
    /** @implementation-alias DOMNode::lookupNamespaceURI */
    public function lookupNamespaceURI(?string $prefix): ?string
    {
    }
    public function isDefaultNamespace(?string $namespace): bool
    {
    }
    public function insertBefore(Node $node, ?Node $child): Node
    {
    }
    public function appendChild(Node $node): Node
    {
    }
    public function replaceChild(Node $node, Node $child): Node
    {
    }
    public function removeChild(Node $child): Node
    {
    }
    /** @implementation-alias DOMNode::getLineNo */
    public function getLineNo(): int
    {
    }
    public function getNodePath(): string
    {
    }
    /** @implementation-alias DOMNode::C14N */
    public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null): string|false
    {
    }
    /** @implementation-alias DOMNode::C14NFile */
    public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null): int|false
    {
    }
    /** @implementation-alias DOMNode::__sleep */
    public function __sleep(): array
    {
    }
    /** @implementation-alias DOMNode::__wakeup */
    public function __wakeup(): void
    {
    }
}